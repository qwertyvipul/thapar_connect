from django import forms

class LoginForm(forms.Form):
    #CHOICES = ((1, 'Teacher'), (2, 'Student'),)
    #account_type = forms.ChoiceField(choices=CHOICES)
    email_id = forms.CharField(max_length=255)
    password = forms.CharField(widget=forms.PasswordInput(), max_length=60)

class RegisterForm(forms.Form):
    name = forms.CharField(max_length=100)
    email_id = forms.EmailField()
    password = forms.CharField(widget=forms.PasswordInput(), max_length=60)

class OTPForm(forms.Form):
    otp = forms.IntegerField(min_value=100000, max_value=999999)

class RollForm(forms.Form):
    roll_no = forms.IntegerField(max_value=9999999999)

class AttendanceVideoForm(forms.Form):
    video = forms.FileField

class EmailForm(forms.Form):
    email_id = forms.EmailField()

class AddClassForm(forms.Form):
    class_name = forms.CharField(max_length=20)
