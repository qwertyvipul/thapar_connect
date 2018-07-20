from django.views import View
from django.shortcuts import render
from django.http import HttpResponse
from .forms import *
from .models import *
from django.core.mail import EmailMessage
from django.shortcuts import redirect
import random

class SendMailView(View):
    email = EmailMessage('Test Email', 'Hello papa ji kaise he?', to=['vipuls526@gmail.com'])
    def get(self, request):
        if(self.email.send()):
            return HttpResponse('<h1>Message Sent!</h1>')
        else:
            return HttpResponse('<h1>Message Not Sent!</h1>')

class IndexView(View):
    def get(self, request):
        if request.session.has_key('user'):
            return render(request, 'attendance/index.html')

        return redirect('attendance:login')

class RegisterView(View):
    register_template = 'attendance/register.html'
    register_form = RegisterForm
    def get(self, request):
        return render(request, self.register_template, {'register_form': self.register_form})

    def post(self, request, *args, **kwargs):
        form = self.register_form(request.POST)
        if form.is_valid():
            request.session['process'] = 1
            otp = random.randint(100000, 999999)
            request.session['otp'] = otp
            name = form.cleaned_data['name']
            request.session['name'] = name
            email_id = form.cleaned_data['email_id']
            request.session['email_id'] = email_id
            request.session['password'] = form.cleaned_data['password']
            email = EmailMessage('Verify OTP',
                                 'Hey ' + str(name) + ' - ' + str(otp) + ' is your otp to register to Thapar Connect.',
                                 to=[email_id])
            email.send()
            return redirect('attendance:verify-otp')

        return render(request, self.register_template, {'register_form': self.register_form})

class LoginView(View):
    login_template = 'attendance/login.html'
    login_form = LoginForm
    def get(self, request):
        return render(request, self.login_template, {'login_form': self.login_form})

    def post(self, request):
        form = self.login_form(request.POST)
        if form.is_valid():
            query = UserInfo.objects.filter(email_id=form.cleaned_data['email_id'])
            query = query.filter(password=form.cleaned_data['password'])
            total = query.count()
            if total == 1:
                for result in query:
                    id = result.id
                    request.session['user'] = id
                    return redirect('attendance:index')

        return render(request, self.login_template, {'login_form': self.login_form})

class VerifyOTPView(View):
    otp_template = 'attendance/verify-otp.html'
    otp_form = OTPForm
    def get(self, request):
        return render(request, self.otp_template, {'otp_form': self.otp_form})

    def post(self, request):
        form = self.otp_form(request.POST)
        if form.is_valid():
            otp = int(form.cleaned_data['otp'])
            if otp == request.session['otp']:
                process = int(request.session['process'])
                # Process-1 is for user registration
                if process == 1:
                    user = UserInfo()
                    user.name = request.session['name']
                    user.email_id = request.session['email_id']
                    user.password = request.session['password']
                    user.save()
                    return redirect('attendance:login')
                    account_type = int(request.session['account_type'])

        return render(request, self.otp_template, {'otp_form': self.otp_form})

class SubmitRollView(View):
    roll_template = 'attendance/submit-roll.html'
    roll_form = RollForm
    def get(self, request):
        if request.session.has_key('user'):
            return render(request, self.roll_template, {'roll_form': self.roll_form})
        return redirect('attendance:index')

    def post(self, request):
        if request.session.has_key('user'):
            form = self.roll_form(request.POST)
            if form.is_valid():
                user = getUser(int(request.session['user']))
                student = Student()
                student.user = user
                student.roll_no = form.cleaned_data['roll_no']
                student.save()
                return redirect('attendance:student')

        return render(request, self.roll_template, {'roll_form': self.roll_form})

class ProfileView(View):
    def get(self, request):
        if request.session.has_key('user'):
            id = request.session['user']
            query = UserInfo.objects.filter(id = int(id))
            for result in query:
                user = result
                break

            context = {
                'user': user,
            }
            return render(request, 'attendance/profile.html', context)

        return redirect('attendance:login')

class TeacherView(View):
    def get(self, request):
        if request.session.has_key('user'):
            user = getUser(int(request.session['user']))
            query = Teacher.objects.filter(user = user)
            if query.count() == 1:
                return render(request, 'attendance/teacher.html')
            elif query.count() == 0:
                return redirect('attendance:teacher-submit-email')
        return redirect('attendance:index')

class TeacherSubmitEmailView(View):
    email_template = 'attendance/teacher-submit-email.html'
    email_form = EmailForm
    def get(self, request):
        if request.session.has_key('user'):
            return render(request, self.email_template, {'email_form': self.email_form})
        return redirect('attendance:index')

    def post(self, request):
        if request.session.has_key('user'):
            form = self.email_form(request.POST)
            if form.is_valid():
                email = form.cleaned_data['email_id']
                domain = email.split('@')[1]
                if domain == 'thapar.edu':
                    user = getUser(int(request.session['user']))
                    teacher = Teacher()
                    teacher.user = user
                    teacher.thapar_email = email
                    teacher.save()
                    return redirect('attendance:teacher')
            return render(request, self.email_template, {'email_form': self.email_form})
        return redirect('attendance:index')

class AddClassView(View):
    def get(self, request):
        return render(request, 'attendance/add-class.html')

class StudentView(View):
    def get(self, request):
        if request.session.has_key('user'):
            user = getUser(int(request.session['user']))
            query = Student.objects.filter(user = user)
            if query.count() == 1:
                return render(request, 'attendance/student.html')
            elif query.count() == 0:
                return redirect('attendance:submit-roll')

        return redirect('attendance:index')

class LogoutView(View):
    def get(self, request):
        try:
            del request.session['user']
        except KeyError:
            pass
        return redirect('attendance:login')

def getUser(id):
    query = UserInfo.objects.filter(id = id)
    count = query.count()
    for result in query:
        user = result
        return user

