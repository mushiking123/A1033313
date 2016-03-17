#!/usr/bin/env python
# -*- coding: utf-8 -*-
def isPrime(n):
	num=0
	for x in range(1,n+1):
		if(n%x==0):
			num=num+1
	if(num==2):
		return 1
	else:
		return 0 

a=isPrime(5)
print a		
sum=0	
for x in range(1,1001):
	if isPrime(x)==1:
		sum=sum+x
print "%d" %sum
		
		