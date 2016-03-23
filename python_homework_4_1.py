#!/usr/bin/env python
# -*- coding: utf-8 -*-
import random
a=random.randint(1,99)
b=1
c=99
number=input('plz input ur number(1~99):')
num=1
while number!=a:
	if number>a: 
		c=number
		print "the range is from %d to %d" %(b,c)
		number=input('plz re-enter ur number(%d~%d):'%(b,c))
		num=num+1
		
	if number<a:
		b=number
		print 'the range is from %d to %d' %(b,c)
		number=input('plz re-enter ur number(%d~%d):'%(b,c))
		num=num+1

print 'you are correct, the number is %d , and use %d time' %(a,num)