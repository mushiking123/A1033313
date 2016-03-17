#!/usr/bin/env python
# -*- coding: utf-8 -*-
a=input("plz input a number:")
num=0
for x in range(1,a+1):
	if(a%x==0):
		num=num+1
		if(num==2):
			print "%d is a prime number" %a

