# pingdom
Monitoring platform for Pingdom checks.

  It will use the pingdom API to import data into influxdb. It will push messages to slack channels to assigned users.
  From here metrics and data dashboard for further analasys will be provided.
  
1) Install LAMPP stack.
2) Install Influxdb
	start influxshell typing influx
	switch the data type
		precision rfc3339
	Create table for records:
		INSERT a_measurement,host=www.makro.be,region=eu,status=up value=0.64
		INSERT a_measurement,host=www.metro.ro,region=eu,status=up value=0.24
		INSERT a_measurement,host=www.makro.be,region=eu,status=down value=0.41
		INSERT a_measurement,host=www.metro.de,region=eu,status=up value=0.04
		INSERT a_measurement,host=www.metro.fr,region=eu,status=up value=0.14
		INSERT a_measurement,host=www.metro.it,region=eu,status=down value=0.21

		SELECT  host, region, status, value FROM a_measurement			
  
3) Add communication library for PHP -> InfluxDB
	https://docs.influxdata.com/influxdb/v0.8/client_libraries/php/ 
		
  
  Project started: 01.02.2018
  Location:        Bucuresti, Berceni
  Authos: Catalin Poienaru
