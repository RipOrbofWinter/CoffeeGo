#!/user/bin/env python
import mysql.connector

con = mysql.connector.connect(user='janhewf317_koffiega', password='KoffieGa09$',host='ftp.koffie.ga', port=3306,database='janhewf317_koffiega')
c=con.cursor()
c.execute("SELECT * FROM `order_information` ORDER BY `order_id`")
for x in c:
    print(x)
    print(x[1])
    #for y in x:
        #print(y)
c.execute("DELETE FROM order_information")
con.commit()
con.close()