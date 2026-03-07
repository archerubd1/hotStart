import mysql.connector
import sys

learner_id = sys.argv[1]

db = mysql.connector.connect(
    host="localhost",
    user="root",
    password="",
    database="astraal_lxp"
)

cursor = db.cursor()

cursor.execute(
"INSERT INTO orientation_suggestions (learner_id,suggestion) VALUES (%s,%s)",
(learner_id,"Start with beginner courses")
)

db.commit()

print("Suggestions generated successfully")