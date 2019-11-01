#!/user/bin/env python
import mysql.connector

con = mysql.connector.connect(user='koffiega', password='KoffieGa09$',host='koffie.ga', port=3308,database='koffiega')
c=con.cursor()
print(c.execute("SELECT VERSION(), CURRENT_DATE;"))
con.close()