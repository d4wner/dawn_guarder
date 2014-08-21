# -*- coding:utf-8 -*-
#coding=utf-8
import pymssql
import pyodbc
#创建一个数据库连接，host是服务器的ip地址，如果是本机可以用"."，user是访问用户名，password是密码，database是数据库名，比ADO的连接似乎简单一些
#conn=pymssql.connect(host="SPIDER-9A058FD8\SQLEXPRESS",database="master")
conn=pyodbc.connect('DRIVER={SQL Server};SERVER=SPIDER-9A058FD8\SQLEXPRESS;DATABASE=master;charset=utf-8')
#创建游标对象，相当于ADO的记录集
cou=conn.cursor()
sql="select name,sid from sysdatabases"
#执行命令
cou.execute(sql)
#取出所有记录，返回的是一个包含tuple的list，list的元素是记录行，tuple的元素是每行记录的字段
for (id,name) in cou.fetchall():
    print "Name:"+str(id)+",Sid:"+name
#sql="Insert into user(name)values('admin')"
#插入一条记录
#cou.execute(sql)
#只有执行了下面的命令，上面的操作才能生效，配合异常处理，可以实现pymssql的事务操作
conn.commit()
#关闭数据库的连接
conn.close()
