# BackupconfigResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**default_retention** | **string** | Number of days incremental backups and full on-demand backups are retained. If set to &lt;code&gt;null&lt;/code&gt;, backups are retained indefinitely or until you manually delete them.&lt;p&gt;Full scheduled backups are retained until their last related incremental backup is no longer available, if any. | [optional] 
**full_backup_schedule** | [**\Swagger\Client\Model\BackupSchedule**](BackupSchedule.md) |  | [optional] 
**incremental_backup_schedule** | [**\Swagger\Client\Model\BackupSchedule**](BackupSchedule.md) |  | [optional] 
**scheduled_backups** | **string** | Type of scheduled backups. Only value is &lt;code&gt;ALL&lt;/code&gt;. This means both full and incremental scheduled backups are enabled. | [optional] 
**extended_restore_types** | **string** | Only value is &lt;code&gt;pit&lt;/code&gt;. This means that point-in-time restoration is also supported, in addition to restoration by using a backup ID. | [optional] 
**last_backup_date** | **string** | Date and time that the last backup completed.&lt;p&gt;&lt;b&gt;Note:&lt;/b&gt; If there have been no backups, this attribute is omitted. | [optional] 
**next_full_backup_date** | **string** | Scheduled date and time for next full backup. | [optional] 
**next_incremental_backup_date** | **string** | Scheduled date and time for next incremental backup. | [optional] 
**last_successful_cleanup_date** | **string** | Date and time that the last successful cleanup job completed. The cleanup job is run after the scheduled backup for the day is completed. The cleanup job purges old records, deletes expired backups. If there have been no cleanups, this attribute is omitted. | [optional] 
**backup_destination** | **string** | Location of the backups; either &lt;code&gt;BOTH&lt;/code&gt; (which means Disk and Oracle Storage Cloud Service Container) or &lt;code&gt;NONE&lt;/code&gt;. | [optional] 
**cloud_storage_container** | **string** | Name of the Oracle Storage Cloud Service container that is used to store backups. | [optional] 
**cloud_storage_user** | **string** | User name to access the specified Oracle Storage Cloud Service container. | [optional] 
**total_cloud_storage_container_used** | **string** | Total amount, in MBs, of the Storage Cloud Service container space that is currently in use. | [optional] 
**total_cloud_storage_container_used_in_bytes** | **string** | Total amount, in Bytes, of the Storage Cloud Service container space that is currently in use. | [optional] 
**total_backup_volume_used** | **string** | Total amount, in MBs, of the backup volume that is currently in use. | [optional] 
**total_backup_volume_used_in_bytes** | **string** | Total amount, in Bytes, of the backup volume that is currently in use. | [optional] 
**percent_backup_volume_used** | **string** | Total percent of the backup volume that is currently in use. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


