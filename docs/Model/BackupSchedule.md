# BackupSchedule

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**second** | **string** | Seconds. This value is not configurable. It defaults to 0. | [optional] 
**minute** | **string** | Minutes. Valid values are 0 to 59. | [optional] 
**hour** | **string** | Hours. Valid values are 0 to 23. | [optional] 
**day_of_month** | **string** | Day of the month. This value is not configurable. It defaults to all days of the month (&amp;#42;). | [optional] 
**month** | **string** | Month. This value is not configurable. It defaults to all months (&amp;#42;). | [optional] 
**day_of_week** | **string** | Day of the week. Valid values are: Mon, Tue, Wed, Thu, Fri, Sat, Sun. For full backups, only one value (day) is allowed. For incremental backups, one or more values (days) are allowed. If a value is not specified for incremental backups, the default value is calculated as all days except the day that full backups are initiated. | [optional] 
**year** | **string** | Year. This value is not configurable. It defaults to all years (&amp;#42;). | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


