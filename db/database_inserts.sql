BEGIN TRANSACTION;

insert into User (user_name, user_password, user_password_hash, user_email ) 
values  ('Ultron', 'evilone', '5555', 'ultron@evilones.com'), ('João', 'pass123!#', '5555', 'joao@evilla.com'), 
('Douglas', 'pwd', '5555', 'douglas@gmail.com');

COMMIT;
