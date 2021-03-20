# 在这里写上你的代码 :-)

favourite ="Qkehan\n"
for i in favourite*8:
    print(" ",end=i)
#    print(" ",i)


member = ['学习','挣钱','买东西','享受生活','创造社会价值']
for each in member:
    print(each,len(each))

#调换member数组里面的两个值位置的方法
#temp = member[0]   #将0赋值给temp
#member[0]=member[1]   #再将1赋值给0
#member[0]=temp      #再将temp赋值给0


#从列表里删除元素的方法【三个方法】
#用.remove()方法
#member.remove('买东西')
#-----------
#del member[2]   #del不是方法，它是语句，也可以删除
#-------
##pop方法是利用pop从列表数组最后取出一个参数，并返回给你。
#member.pop()
#life=member.pop()   #并且可以直接对返回值=赋值，使得pop从数组拿出的数据直接被赋值。
#member.pop(1)   #另外还可以给pop方法增加参数，这样可以直接从数组任意位置拿取。
#-------


#【如何一次性从数组中获得多个元素？？】利用列表分片slice
#member
#member[1:3]  #1位置两个元素
#member[0:4]  #0位置四个元素
#member[0:5]  #0位置五个元素
#member[:3]   #起始位置到2的所有元素
#member[1:]   #1位置到后续所有元素
#member[3:]   #3位置到后续所有元素
#member[:]    #直接拷贝数组从初识到结束的所有数组
#member2 = member[:] #非常有用的方法
#-------------------


#range(5)
#list(range(5))

#语法：range([strat,]stop[,step=1])
#-这个BIF有三个参数，其中用中括号括起来的的两个表示这两个参数是可选的
#-step=表示第三个参数的默认值是1
#-range这个BIF的作用是生成一个从start参数的值开始到stop参数的值结束的数字序列。

for i in range(5):
    print(i)
print ('-----')

for i in range(2,9):
    print(i)
print ('-----')

for i in range(5,100,5):
    print(i)
print ('-----')




