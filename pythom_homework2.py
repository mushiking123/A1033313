#!/usr/bin/env python
# -*- coding: utf-8 -*-
print "hello"
money=input("�аݱz�n��X�h�ֿ�?:")
f = open("ATM.txt","w")
f.write("�аݱz�n��X�h�ֿ�?:%d" %money)
a=5000
b=5000-money
if b>0:
	print "�z���s���ٳѤU%d��" %b
	f.write("�z���s���ٳѤU%d��" %b)
elif b==0:
	print "�z���s�ڵL�Ѿl�s��"
	f.write("�z���s�ڵL�Ѿl�s��")

else:
	print "�z���s�ڤ���"
	f.write("�z���s�ڤ���")
f.close
	
