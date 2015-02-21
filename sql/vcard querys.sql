use vcard_db;
SELECT * FROM login 
	join user on login.user_id = user.id
where user = "latex";

SELECT * FROM login 
	join user on login.user_id = user.id
	join contact_user on contact_user.id
where user = "latex";
