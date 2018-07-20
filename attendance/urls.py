from django.urls import path
from .views import *

app_name = 'attendance'

urlpatterns = [
    path('', IndexView.as_view(), name='index'),
    path('login/', LoginView.as_view(), name='login'),
    path('register/', RegisterView.as_view(), name='register'),
    path('send-mail/', SendMailView.as_view(), name='send-mail'),
    path('verify-otp/', VerifyOTPView.as_view(), name='verify-otp'),
    path('profile/', ProfileView.as_view(), name='profile'),
    path('teacher/', TeacherView.as_view(), name='teacher'),
    path('teacher/submit-email/', TeacherSubmitEmailView.as_view(), name='teacher-submit-email'),
    path('teacher/add-class/', AddClassView.as_view(), name='add-class'),
    path('student/', StudentView.as_view(), name='student'),
    path('student/submit-roll/', SubmitRollView.as_view(), name='submit-roll'),
    path('logout/', LogoutView.as_view(), name='logout'),
]
