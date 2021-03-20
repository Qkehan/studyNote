# 在这里写上你的代码 :-)

favourite = "Qkehan\n"
for i in favourite * 8:
    print(" ", end=i)
#    print(" ",i)


member = ["学习", "挣钱", "买东西", "享受生活", "创造社会价值"]
for each in member:
    print(each, len(each))

# 调换member数组里面的两个值位置的方法
# temp = member[0]   #将0赋值给temp
# member[0]=member[1]   #再将1赋值给0
# member[0]=temp      #再将temp赋值给0


# 从列表里删除元素的方法【三个方法】
# 用.remove()方法
# member.remove('买东西')
# -----------
# del member[2]   #del不是方法，它是语句，也可以删除
# -------
#pop方法是利用pop从列表数组最后取出一个参数，并返回给你。
# member.pop()
# life=member.pop()   #并且可以直接对返回值=赋值，使得pop从数组拿出的数据直接被赋值。
# member.pop(1)   #另外还可以给pop方法增加参数，这样可以直接从数组任意位置拿取。
# -------


# 【如何一次性从数组中获得多个元素？？】利用列表分片slice
# member
# member[1:3]  #1位置两个元素
# member[0:4]  #0位置四个元素
# member[0:5]  #0位置五个元素
# member[:3]   #起始位置到2的所有元素
# member[1:]   #1位置到后续所有元素
# member[3:]   #3位置到后续所有元素
# member[:]    #直接拷贝数组从初识到结束的所有数组
# member2 = member[:] #非常有用的方法
# -------------------


# range(5)
# list(range(5))

# 语法：range([strat,]stop[,step=1])
# -这个BIF有三个参数，其中用中括号括起来的的两个表示这两个参数是可选的
# -step=表示第三个参数的默认值是1
# -range这个BIF的作用是生成一个从start参数的值开始到stop参数的值结束的数字序列。

for i in range(5):
    print(i)
print("-----")

for i in range(2, 9):
    print(i)
print("-----")

for i in range(5, 100, 5):
    print(i)
print("-----")


# -------------------

# 【列表的一些常用操作符】
# 比较操作符
# 逻辑操作符
# 链接操作符
# 重复操作符
# 成员关系操作符

# -----
# 比较操作符
list1 = [123]
list2 = [234]
# list1 > list2

list3 = [123, 456]
list4 = [234, 123]
# list3 > list4  #比较结果是false,很奇怪？原因是比较符是从字节0位置比较的。

list5 = [123, 456]
# (list3 < list4) and (list3 == list5)  #返回结果是true，多次比较，非常智能。
list6 = list1 + list2  # 返回值[123,234] ，与字符串的拼接有相似性，但是不是完全一样的。
# 相加+操作符类似于list.extend()方法。
# 但是+号两边必须是相同的类型的元素，所以在操作数组的时候，尽量用.append()/.extend()/.insert() 这些方法较为严谨。
# ---------
# list = list3*3  #返回值是重复的三次输入。
# list *= 3  #赋值操作符，可以在操作基础上，继续运算操作。
# list *= 3  #这一次会返回九次。
# ---------------

# 成员关系操作符in  /   not in #这是个判断操作符，判断成员是否在这里面。
# 那么是否可以判断集合内包含的数组内的元素呢？？
list7 = [123, 234, ["学习", "挣钱", "买东西", "享受生活", "创造社会价值"], 345, 456]
list7.append([123,234])

# 事实证明不行，并不能判断集合内数字里面的元素。
# 所以in  / not in 只能判断一层的成员关系,和二维数组很像。
# >>>list7[2][3]  #语句是访问列表内/数组内的元素，返回值是‘享受生活’的。
#-----------------

#list6.count(123)  #返回值是123在list6中出现的次数。
#list7.count(123)  #返回值是1，说明count值查看一层关系
#list7.index(345)  #返回值是3，这个参数显示元素在列表里面的位置。
list7.append(345)
#再次list7.index(345)  #返回值是3说明这个方法只会从前向后显示唯一一次，第二个数值就没有了
#list7.index(345,4,7)  #另外.index(*,*,*)还有两个参数，确定查找位置。

list9 = ['123','234','345','456','567','789']
#list9.index('456') #返回值是3.
#list9.count('456')  #返回值是2.
list9.append('456')
#list9.index('456')  #返回值是3，证明index()方法只能显示一次。
#-------------

list6 *= 5
#.reverse()方法，可以将数组翻转。
#list9.reverse()   #这个后面是没有参数的。

#.sort()方法，将数组排序。.sort()方法其实有三个参数，
#.sort(func, key)   #func是制定排序算法，key是制定算法搭配的关键字。
#.sort(reverse=False)  #.sort()方法另外一个参数是reverse默认值是False，但是可以改成True。
#---------------------------



