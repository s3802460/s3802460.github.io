#3
select sv.name,count(*) as Numemployee
from employee e, employee sv
where e.supervisor = sv.number
group by sv.name;
#7
select e1.name as employee, p1.income*12 as salary
from employee e1, position p1
where p1.code = e1.position and abs(p1.income - (select avg(p.income) as AvgIncomeOfCompany
from employee e, position p
where e.position = p.code)) <= 100;
#9
select sv.name, count(*)
from employee e, employee sv
where e.supervisor = sv.number
group by e.supervisor
having count(*) >= all (select count(e3.supervisor)
from employee e3
group by e3.supervisor);

#tute 4 sql queries
#1
select p1.code, count(*) as num
from position p1, employee e1
where p1.code = e1.position and p1.income > (select avg(p.income) as AvgIncomeOfCompany
from employee e, position p
where e.position = p.code)
group by p1.code;
#2
select e.name, p.title, d.name, h.start_date
from department d, position p, history h, employee e
where p.code = h.position and h.employee = e.number
and e.department = d.code and h.start_date <= all (select min(h1.start_date)
                                                    from history h1, position p1
                                                    where p1.code = h1.position);



