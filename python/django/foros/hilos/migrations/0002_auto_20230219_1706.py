# Generated by Django 3.2.12 on 2023-02-19 16:06

from django.db import migrations, models
import django.utils.timezone


class Migration(migrations.Migration):

    dependencies = [
        ('hilos', '0001_initial'),
    ]

    operations = [
        migrations.AlterField(
            model_name='comentario',
            name='imagen_com_1',
            field=models.ImageField(null=True, upload_to='f_hilo'),
        ),
        migrations.AlterField(
            model_name='comentario',
            name='imagen_com_2',
            field=models.ImageField(default=django.utils.timezone.now, upload_to='f_hilo'),
            preserve_default=False,
        ),
        migrations.AlterField(
            model_name='comentario',
            name='imagen_com_3',
            field=models.ImageField(default=django.utils.timezone.now, upload_to='f_hilo'),
            preserve_default=False,
        ),
    ]