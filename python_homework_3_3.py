#!/usr/bin/env python
# -*- coding: utf-8 -*-
f=open("input.txt","r")
a=f.read()
b=float(a.count("e"))
c=float(a.count(" "))
d=float(len(a)/b)
e=float(len(a)/c)
print "here are %d words" %len(a)
print "%d" %b
print "%d" %c
print "%f" %d
print "%f" %e