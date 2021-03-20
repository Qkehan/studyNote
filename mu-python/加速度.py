# 在这里写上你的代码 :-)
s = float(input('请输入距离m:'))
t = float(input('请输入时间s:'))
v0 = float(input('请输入初始速度m/s:'))

a = 2 * (s-v0 * t) / t ** 2

print('加速度:'+str(a)+'m/s^2')
