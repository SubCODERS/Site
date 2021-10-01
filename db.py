import sqlite3 as sql

db = sql.connect('parents.db')
cur = db.cursor()

db_1 = sql.connect('childs.db')
cur_1 = db_1.cursor()

cur.execute("""CREATE TABLE IF NOT EXISTS parents (
	login TEXT,
	password TEXT,
	full_name TEXT,
	who TEXT,
	age  INT,
	phone_child TEXT,
	parents_phone TEXT,
	mail TEXT,
	city TEXT
)""")

db.commit()

cur_1.execute("""CREATE TABLE IF NOT EXISTS childs (
	login TEXT,
	password TEXT,
	full_name TEXT,
	who TEXT,
	age TEXT,
	phone_child TEXT,
	parents_phone TEXT,
	city TEXT
)""")

db_1.commit()

who = input('Кто вы родитель или ребенок? ')

if who == 'Родитель':
	login = input('Введите ваш логин ')
	password = input('Введите ваш пароль ')
	full_name = input('Введите ваше ФИО ')
	age = input('Введите ваш возраст ')
	phone_child = input('Введите номер телефона ребенка ')
	parents_phone = input('Введите номер телефона родителя ')
	mail = input('Введите почту родителя ')
	city = input('Введите ваш город ')

	data = [(login, password, full_name, who, age, phone_child, parents_phone, mail, city)]

	cur.execute("SELECT login FROM parents WHERE login='{login}'")
	if cur.fetchone() is None:
		cur.executemany("INSERT INTO parents(login, password, full_name, who, age, phone_child, parents_phone, mail, city) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)", data)
		db.commit()
	else:
		print('Такая запись уже имеется')

elif who == 'Ребенок':
	login_1 = input('Введите ваш логин ')
	password_1 = input('Введите ваш пароль ')
	full_name_1 = input('Введите ваше ФИО ')
	age_1 = input('Введите ваш возраст ')
	phone_child_1 = input('Введите номер телефона ребенка ')
	parents_phone_1 = input('Введите номе телефона родителя ')
	city_1 = input('Введите ваш город ')

	data = [(login_1, password_1, full_name_1, who, age_1, phone_child_1, parents_phone_1, city_1)]

	cur_1.execute("SELECT login FROM childs WHERE login='{login}'")
	if cur_1.fetchone() is None:
		cur_1.executemany("INSERT INTO childs(login, password, full_name, who, age, phone_child, parents_phone, city) VALUES (?, ?, ?, ?, ?, ?, ?, ?)")
		db_1.commit()
	else:
		print('Такая запись уже имеется')
else:
	print('Errors')


#data = [(login, password, full_name, who, age, phone_child, parents_phone, mail, city)]

#cur.execute("SELECT login FROM users WHERE login='{login}'")
#if cur.fetchone() is None:
#	cur.executemany(f"INSERT INTO users(login, password, full_name, who, age, phone_child, parents_phone, mail, city) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)", data)
#	db.commit()
#else:
#	print('Такая запись уже имеется')

for value in cur.execute("SELECT * FROM parents"):
	print(value)

for value_1 in cur_1.execute("SELECT * FROM childs"):
	print(value_1)