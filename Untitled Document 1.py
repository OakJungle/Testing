import sqlite3
def search_details(database_name, table_name, search_column, search_value):
try:
	# Connect to the SQLite database
	connection = sqlite3.connect(database_name)
	cursor = connection.cursor()
	# Prepare the SQL query
	query = f"SELECT * FROM {table_name} WHERE {search_column} = ?"
	# Execute the SQL query
	cursor.execute(query, (search_value,))
	# Fetch all the rows
	rows = cursor.fetchall()
	# Check if any rows were returned
		if rows:
			# Print the details for each row
			for row in rows:
			print(f"ID: {row[0]}, Name: {row[1]}, Age: {row[2]}, Email: {row[3]}")
			else:
			print("No details found.")
			except sqlite3.Error as error:
			print(f"An error occurred: {error}")
			finally:
			# Close the connection to the database
			if connection:
				connection.close()
 				#Example usage
				search_details("example.db", "users", "email", "john.doe@example.com")
