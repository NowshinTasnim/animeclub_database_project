CREATE OR REPLACE FUNCTION myfunc(p IN INTEGER) RETURN NUMBER IS
  	
            BEGIN
                SELECT max(count(a.anm_id)) as max_work 
            from animes as a RIGHT JOIN members as m
            ON a.member_id = m.member_id
            END;