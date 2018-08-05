from django.db import models

class UserInfo(models.Model):
    name = models.CharField(max_length=100)
    profile_pic = models.FileField(upload_to='profile_pics/', blank=True)
    email_id = models.EmailField(max_length=255, unique=True)
    password = models.CharField(max_length=60)

class Teacher(models.Model):
    user = models.ForeignKey(UserInfo, on_delete=models.CASCADE)
    thapar_email = models.EmailField()

class Student(models.Model):
    user = models.OneToOneField(UserInfo, on_delete=models.CASCADE)
    roll_no = models.IntegerField(unique=True)

class ClassRoom(models.Model):
    year = models.IntegerField()
    class_code = models.CharField(max_length=20)
    class_key = models.CharField(max_length=6)

class ClassStudents(models.Model):
    class_room = models.ForeignKey(ClassRoom, on_delete=models.CASCADE)
    student = models.ForeignKey(Student, null=True, on_delete=models.SET_NULL)
    serial_no = models.IntegerField()

class Subjects(models.Model):
    subject_name = models.CharField(max_length=60)
    subject_code = models.CharField(max_length=10)

class Lecture(models.Model):
    teacher = models.ForeignKey(Teacher, null=True, on_delete=models.SET_NULL)
    class_room = models.ForeignKey(ClassRoom, on_delete=models.CASCADE)
    subject = models.ForeignKey(Subjects, on_delete=models.CASCADE)
    class_type = models.CharField(max_length=1)

class AttendanceInfo(models.Model):
    lecture = models.ForeignKey(Lecture, on_delete=models.CASCADE)
    data_time = models.DateTimeField()
    type = models.CharField(max_length=20)

class AttendanceLog(models.Model):
    attendance_info = models.ForeignKey(AttendanceInfo, on_delete=models.CASCADE)
    student = models.ForeignKey(Student, on_delete=models.CASCADE)
    is_present = models.BooleanField()


class Encodings(models.Model):
    user = models.ForeignKey(UserInfo, on_delete=models.CASCADE)
    encoding = models.TextField()


#---------------------------------------------------------------#
class Blog(models.Model):
    name = models.CharField(max_length=100)
    tagline = models.TextField()

    def __str__(self):
        return self.name

class Author(models.Model):
    name = models.CharField(max_length=200)
    email = models.EmailField()

    def __str__(self):
        return self.name

class Entry(models.Model):
    blog = models.ForeignKey(Blog, on_delete=models.CASCADE)
    headline = models.CharField(max_length=255)
    body_text = models.TextField()
    pub_date = models.DateField()
    mod_date = models.DateField()
    authors = models.ManyToManyField(Author)
    n_comments = models.IntegerField()
    n_pingbacks = models.IntegerField()
    rating = models.IntegerField()

    def __str__(self):
        return self.headline