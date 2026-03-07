import sys
import mysql.connector

learner_id = int(sys.argv[1])

db = mysql.connector.connect(
    host="localhost",
    user="db_user",
    password="db_password",
    database="astraal_lxp"
)

cursor = db.cursor(dictionary=True)

cursor.execute(
    "SELECT * FROM orientation_inputs WHERE learner_id=%s",
    (learner_id,)
)

row = cursor.fetchone()

suggestions = []

if row['learning_preference'] == 'By just looking around for now':
    suggestions.append((
        "Browse sample content without enrolling.",
        "You indicated you'd like to observe before committing."
    ))

if row['intent_clarity'] == 'I’m still figuring it out':
    suggestions.append((
        "Explore multiple learning areas before choosing.",
        "It’s okay to explore before deciding."
    ))

if row['comfort_level'] == 'Not very comfortable yet':
    suggestions.append((
        "Begin with a guided walkthrough.",
        "This helps you become familiar at your own pace."
    ))

cursor.execute(
    "DELETE FROM orientation_suggestions WHERE learner_id=%s",
    (learner_id,)
)

for s in suggestions:
    cursor.execute("""
    INSERT INTO orientation_suggestions
    VALUES (%s,%s,%s,NULL,1,NOW())
    """,(learner_id,s[0],s[1]))

db.commit()
db.close()
