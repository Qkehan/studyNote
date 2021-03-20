# 在这里写上你的代码 :-)
a = lambda x : x*10 # x是传入的参数
print(a(1))    # lambda定义了一个匿名函数，将x作为传入参数，x*10作为函数体，用函数可以定义为：
print('----------')

def fun(x):
    return x*10
print(fun(1))
print('----------')

#lambda()可以与filter(),map()等函数一起使用：
#将range(10)以内的偶数过滤掉
a = list(filter(lambda x : x%2, range(10))) # 奇数余2的值为1，bool值为True，filter函数返回此元素
print(a)
print('----------')

#将range(10)以内的数*2保存到新列表
b = list(map(lambda x : x*2, range(10)))
print(b)
print('----------')

c = [x*2 for x in range(10)]
print(c)
print('----------')

#定义两个列表，将两个列表相同位置的值加起来形成新列表
ls1 = [1,2,3]
ls2 = [2,3,4]
d = list(map(lambda x,y: x+y, ls1, ls2))
print(d)
print('----------')


ls3 = [1,2,3]
ls4 = [4,5,6]
e = (ls3+ls4)  # e = list(ls3+ls4) #这个方法也可以。
print(e)
print('e----------')



