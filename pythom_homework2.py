#!/usr/bin/env python
# -*- coding: utf-8 -*-
print "hello"
money=input("請問您要領出多少錢?:")
f = open("ATM.txt","w")
f.write("請問您要領出多少錢?:%d" %money)
a=5000
b=5000-money
if b>0:
	print "您的存款還剩下%d元" %b
	f.write("您的存款還剩下%d元" %b)
elif b==0:
	print "您的存款無剩餘存款"
	f.write("您的存款無剩餘存款")

else:
	print "您的存款不足"
	f.write("您的存款不足")
f.close
	
