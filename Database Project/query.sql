/* 1. */
select employeeid, salary, healthcoverage, bonus
from salariedemployee_t
where bonus>10000;

/* 2. */
/*select e.employeeid, e.employeename, j.jobname, de.dependentname
from employee_t e, department_t d, jobtitle_t j, dependent_t de;*/
SELECT p.projectid, p.projectname, sk.employeeid, sk.hoursworked, e.employeename, ja.jobid FROM employee_t e, jobarchive_t ja, project_t p, skilltask_t sk
WHERE p.projectid = sk.projectid AND sk.employeeid = e.employeeid AND e.employeeid = ja.employeeid;
/* 3. */
select count(*) from client_t;

/* 4. */
select c.clientid, c.companyname, e.brand
from client_t c, equipment_t e
ORDER BY e.brand, c.companyname;

/* 5. */
select count(employeeid), salary
from salariedemployee_t
GROUP BY salary
HAVING count(employeeid)>0;

/* 6. */
CREATE OR REPLACE VIEW BRANDANDVENDOR AS
  SELECT e.brand AS "Brand", e.equipmentid AS "Equipment ID", s.vendorid AS "Vendor ID"
  FROM equipment_t e
    INNER JOIN shipment_t s
      ON s.equipmentid = e.equipmentid
    INNER JOIN vendor_t v
      ON s.vendorid = v.vendorid
    ORDER BY e.equipmentid;

SELECT * FROM BRANDANDVENDOR;

/* 7. */
select e.employeeid, e.employeename
from employee_t e
RIGHT OUTER JOIN department_t d ON d.employeeid = e.employeeid;

/* 8. */
select employeename
from employee_t
where employeeid in (select distinct(employeeid) from salariedemployee_t);

/* 9. */
select e.brand, v.vendorid, v.address
from equipment_t e, vendor_t v;

/* 10. */
select employeeid,
case employeeid
when 123400664 then salary * 1.5
when 123498864 then salary * 2
else salary
end as "New Salary"
from salariedemployee_t;