
from sklearn.linear_model import LinearRegression
lg = LinearRegression()
import numpy as np

x = [[144], [220], [138], [145], [162], 
     [142], [170], [124], [158], [154], 
     [162], [150], [140], [110], [128], 
     [130], [135], [114], [116], [124], 
     [136], [142], [120], [120], [160], 
     [158], [144], [130], [125], [175]]
y = [[39], [47], [45], [47], [65], [46], [67], [42], [67], [56], 
     [64], [56], [59], [34], [42], [48], [45], [17], [20], [19], 
     [36], [50], [39], [21], [44], [53], [63], [29], [25], [69]]
lg.fit(x,y)
predict_y = lg.predict([[39]])
print(predict_y)
sumx = np.sum(x)
sumy = np.sum(y)
multxy = np.array(x)* np.array(y)
sumxy = np.sum(multxy)
xpangkat = np.array(x)*np.array(x)
ypangkat = np.array(y)*np.array(y)
sumxpangkat = np.sum(xpangkat)
sumypangkat = np.sum(ypangkat)
print('------- sum of x-------')
print(sumx)
print('--------- sum of y-----')
print(sumy)
print('----------multiply of x,y---------')
print(multxy)
print('----------sum of multxy----------')
print(sumxy)
print('=========== x pangkat=========')
print(xpangkat)
print('=========== y pangkat=========')
print(ypangkat)
print('=== sum of xpangkat =====')
print(sumxpangkat)
print('===== sum of ypangkat======')
print(sumypangkat)