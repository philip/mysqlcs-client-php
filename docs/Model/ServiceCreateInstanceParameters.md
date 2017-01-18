# ServiceCreateInstanceParameters

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shape** | **string** | Desired compute shape. A shape defines the number of Oracle Compute Units (OCPUs) and amount of memory (RAM). Valid shapes include: &lt;ul&gt;&lt;li&gt;oc3: 1 OCPU, 7.5 GB memory&lt;/li&gt;&lt;li&gt;oc4: 2 OCPUs, 15 GB memory&lt;/li&gt;&lt;li&gt;oc5: 4 OCPUs, 30 GB memory&lt;/li&gt;&lt;li&gt;oc6: 8 OCPUs, 60 GB memory&lt;/li&gt;&lt;li&gt;oc7: 16 OCPUs, 120 GB memory&lt;/li&gt;&lt;li&gt;oc1m: 1 OCPU, 15 GB memory&lt;/li&gt;&lt;li&gt;oc2m: 2 OCPUs, 30 GB memory&lt;/li&gt;&lt;li&gt;oc3m: 4 OCPUs, 60 GB memory&lt;/li&gt;&lt;li&gt;oc4m: 8 OCPUs, 120 GB memory&lt;/li&gt;&lt;li&gt;oc5m: 16 OCPUs, 240 GB memory&lt;/li&gt;&lt;/ul&gt;.&lt;p&gt;See &lt;a href&#x3D;&#39;http://www.oracle.com/pls/topic/lookup?ctx&#x3D;cloud&amp;id&#x3D;OCSUG210&#39; target&#x3D;&#39;_blank&#39;&gt;About Shapes&lt;/a&gt; in &lt;i&gt;Using Oracle Compute Cloud Service&lt;/i&gt; for more information about shapes. | [optional] 
**mysql_user_name** | **string** | Administration user for connecting to the service via the MySQL protocol. User name should start with a letter, consist of letters and numbers, and be between 2 to 32 characters. The default is &lt;code&gt;root&lt;/code&gt;. | 
**mysql_user_password** | **string** | Password for MySQL administration user. The password must meet the following requirements:&lt;ul&gt;&lt;li&gt;Starts with a letter&lt;/li&gt;&lt;li&gt;Is between 8 and 30 characters long&lt;/li&gt;&lt;li&gt;Contains letters, at least one number, and optionally, any number of these special characters: dollar sign ($), pound sign (#), and underscore (_).&lt;/li&gt;&lt;/ul&gt; | 
**mysql_port** | **string** | Port for the MySQL server. Port must be in the range of 3200-3399. The default is &lt;code&gt;3306&lt;/code&gt;. | [optional] 
**mysql_em_port** | **string** | Port for the MySQL Enterprise Monitor. The default is &lt;code&gt;18443&lt;/code&gt;. | [optional] 
**db_storage** | **int** | Storage volume size for MySQL data. The number must be between 25 and 1024 GB. Default value is 25. | [optional] 
**db_name** | **string** | Initial database schema name of your choice, up to 64 characters; can contain letters, numbers and special characters (_,$). The default name is &lt;code&gt;mydatabase&lt;/code&gt;. | [optional] 
**mysql_charset** | **string** | MySQL server character set. See &lt;a href&#x3D;&#39;http://dev.mysql.com/doc/refman/5.7/en/charset-charsets.html&#39;&gt;Supported Character Sets and Collations&lt;/a&gt; for the character sets MySQL supports. | [optional] 
**mysql_collation** | **string** | MySQL server collation. See &lt;a href&#x3D;&#39;http://dev.mysql.com/doc/refman/5.7/en/charset-charsets.html&#39;&gt;Supported Character Sets and Collations&lt;/a&gt; for the permissible collations of each character set. | [optional] 
**enterprise_monitor** | **string** | Indicate whether to configure MySQL Enterprise Monitor during provisioning. The value can only be one of the valid choices, either &lt;code&gt;Yes&lt;/code&gt; or &lt;code&gt;No&lt;/code&gt; and the default is &lt;code&gt;No&lt;/code&gt;. | [optional] [default to 'No']
**enterprise_monitor_manager_user** | **string** | Name for the Enterprise Monitor manager user. Manager User name should start with a letter, consist of letters and numbers, and be between 2 to 32 characters. | [optional] 
**enterprise_monitor_manager_password** | **string** | Password for MySQL Enterprise Monitor manager. The password must be at least 8 characters long with at least one lower case letter, one upper case letter, one number and one special character. | [optional] 
**enterprise_monitor_agent_user** | **string** | Name for the Enterprise Monitor agent user. Agent User name should start with a letter, consist of letters and numbers, and be between 2 to 32 characters. | [optional] 
**enterprise_monitor_agent_password** | **string** | Password for MySQL Enterprise Monitor agent. The password must be at least 8 characters long with at least one lower case letter, one upper case letter, one number and one special character. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


