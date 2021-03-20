# 在这里写上你的代码 :-)
member = ['小鱼','泡泡','黑夜','黑衣人','外星人']
number = [1,2,3,4,5,6]
mix = [1,'小鱼',3.14,[1,2,3]]
empty = []

member.append('飞船')  # append() 方法是向数组最后方添加数据，只能添加一个。

member.extend(['太阳系','银河系'])   # extend()  方法是利用一个数组去扩展另一个数组。
print(len(member))
print(member)
print('-------')

member.insert(0,'蛋')   #  insert()  方法是向数组任意位置插入数据。
print(len(member))
print(member)
print('-------')

member.insert(9,'仙女座')
print(len(member))
print(member)
print('------')

