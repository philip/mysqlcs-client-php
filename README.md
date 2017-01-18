# SwaggerClient-php
Use the REST API to manage MySQL Cloud Service instances

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 2017.01.18
- Build date: 2017-01-17T18:48:51.544-08:00
- Build package: class io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/philip/mysqlcs-rest-client-php.git"
    }
  ],
  "require": {
    "philip/mysqlcs-rest-client-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit lib/Tests
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: defaultBasicAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Swagger\Client\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');
// Configure API key authorization: defaultApiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-ID-TENANT-NAME', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-ID-TENANT-NAME', 'Bearer');

$api_instance = new Swagger\Client\Api\AccessRulesApi();
$x_id_tenant_name = "x_id_tenant_name_example"; // string | Name of the identity domain for the MySQL Cloud Service account.
$identity_domain_id = "identity_domain_id_example"; // string | Name of the identity domain for the MySQL Cloud Service account.
$service_id = "service_id_example"; // string | Name of the Oracle MySQL Cloud Service instance.

try {
    $result = $api_instance->getAccessRules($x_id_tenant_name, $identity_domain_id, $service_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessRulesApi->getAccessRules: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccessRulesApi* | [**getAccessRules**](docs/Api/AccessRulesApi.md#getaccessrules) | **GET** /paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances/{serviceId}/accessrules | View All Access Rules
*AccessRulesApi* | [**insertAccessRule**](docs/Api/AccessRulesApi.md#insertaccessrule) | **POST** /paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances/{serviceId}/accessrules | Add an Access Rule
*AccessRulesApi* | [**updateAccessRule**](docs/Api/AccessRulesApi.md#updateaccessrule) | **PUT** /paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances/{serviceId}/accessrules/{ruleName} | Update an Access Rule
*BackupsApi* | [**deleteBackup**](docs/Api/BackupsApi.md#deletebackup) | **POST** /paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances/{serviceId}/deletedbackups | Delete a Backup (Asynchronous)
*BackupsApi* | [**getAllBackups**](docs/Api/BackupsApi.md#getallbackups) | **GET** /paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances/{serviceId}/backups | View All Backups
*BackupsApi* | [**getAllDeletedBackups**](docs/Api/BackupsApi.md#getalldeletedbackups) | **GET** /paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances/{serviceId}/deletedbackups | View All Deleted Backups
*BackupsApi* | [**getBackup**](docs/Api/BackupsApi.md#getbackup) | **GET** /paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances/{serviceId}/backups/{backupId} | View a Backup
*BackupsApi* | [**getBackupConfiguration**](docs/Api/BackupsApi.md#getbackupconfiguration) | **GET** /paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances/{serviceId}/backupconfig | View the Backup Configuration
*BackupsApi* | [**getDeletedBackup**](docs/Api/BackupsApi.md#getdeletedbackup) | **GET** /paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances/{serviceId}/deletedbackups/{jobId} | View a Deleted Backup
*BackupsApi* | [**getRestoreBackupOperations**](docs/Api/BackupsApi.md#getrestorebackupoperations) | **GET** /paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances/{serviceId}/restoredbackups | View All Restoration Operations
*BackupsApi* | [**getRestoreBackupStatus**](docs/Api/BackupsApi.md#getrestorebackupstatus) | **GET** /paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances/{serviceId}/restoredbackups/{jobId} | View the Status of a Restoration Operation
*BackupsApi* | [**restoreBackup**](docs/Api/BackupsApi.md#restorebackup) | **POST** /paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances/{serviceId}/restoredbackups | Restore a Service Instance from Backup
*BackupsApi* | [**startBackup**](docs/Api/BackupsApi.md#startbackup) | **POST** /paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances/{serviceId}/backups | Initiate an On-demand Backup
*BackupsApi* | [**updateBackupConfiguration**](docs/Api/BackupsApi.md#updatebackupconfiguration) | **POST** /paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances/{serviceId}/backupconfig | Update the Backup Configuration
*HealthMonitoringApi* | [**getMonitoringRecords**](docs/Api/HealthMonitoringApi.md#getmonitoringrecords) | **GET** /paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances/{serviceId}/healthcheck | Monitor a Service Instance
*PatchesApi* | [**applyPatch**](docs/Api/PatchesApi.md#applypatch) | **PUT** /paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances/{serviceId}/patches/{patchId} | Apply a Patch
*PatchesApi* | [**doPatchPrecheck**](docs/Api/PatchesApi.md#dopatchprecheck) | **PUT** /paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances/{serviceId}/patches/checks/{patchId} | Perform a Patching Precheck
*PatchesApi* | [**getAppliedPatches**](docs/Api/PatchesApi.md#getappliedpatches) | **GET** /paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances/{serviceId}/patches/applied | View Applied Patches
*PatchesApi* | [**getAvailablePatches**](docs/Api/PatchesApi.md#getavailablepatches) | **GET** /paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances/{serviceId}/patches/available | View Available Patches
*PatchesApi* | [**getPatchStatus**](docs/Api/PatchesApi.md#getpatchstatus) | **GET** /paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances/{serviceId}/patches/applied/job/{jobId} | View a Patch Operation Status
*PatchesApi* | [**getPrecheckOperations**](docs/Api/PatchesApi.md#getprecheckoperations) | **GET** /paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances/{serviceId}/patches/checks | View All Patching Precheck Operations
*PatchesApi* | [**getPrecheckStatus**](docs/Api/PatchesApi.md#getprecheckstatus) | **GET** /paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances/{serviceId}/patches/checks/job/{jobId} | View the Status of a Patching Precheck Operation
*PatchesApi* | [**rollbackPatch**](docs/Api/PatchesApi.md#rollbackpatch) | **PUT** /paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances/{serviceId}/patches/{rollbackId}/rollback | Rollback a Patch
*SSHAccessApi* | [**addSshKey**](docs/Api/SSHAccessApi.md#addsshkey) | **POST** /paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances/{serviceId}/credentials/crednames/{credentialName} | Add a New SSH Public Key
*SSHAccessApi* | [**getSshKeyDescription**](docs/Api/SSHAccessApi.md#getsshkeydescription) | **GET** /paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances/{serviceId}/credentials/crednames/{credentialName} | View the SSH Key Description
*SSHAccessApi* | [**getSshKeyDescriptions**](docs/Api/SSHAccessApi.md#getsshkeydescriptions) | **GET** /paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/credentials/crednames | Retrieve the SSH Key Description Using Query Parameters
*SSHAccessApi* | [**getSshKeyDetails**](docs/Api/SSHAccessApi.md#getsshkeydetails) | **GET** /paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances/{serviceId}/credentials/{credentialName} | View Details of the SSH Key
*SSHAccessApi* | [**getSshKeyValue**](docs/Api/SSHAccessApi.md#getsshkeyvalue) | **GET** /paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/credentials | Retrieve the SSH Key Value Using Query Parameters
*ServiceInstancesApi* | [**addInstance**](docs/Api/ServiceInstancesApi.md#addinstance) | **POST** /paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances | Create an Oracle MySQL Cloud Service Instance
*ServiceInstancesApi* | [**addInstanceStorage**](docs/Api/ServiceInstancesApi.md#addinstancestorage) | **POST** /paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances/{serviceId}/storage/add | Add storage to a MySQL Cloud Service instance
*ServiceInstancesApi* | [**deleteInstance**](docs/Api/ServiceInstancesApi.md#deleteinstance) | **PUT** /paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances/{serviceId} | Delete a Service Instance
*ServiceInstancesApi* | [**getAllInstances**](docs/Api/ServiceInstancesApi.md#getallinstances) | **GET** /paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances | View All Service Instances
*ServiceInstancesApi* | [**getInstance**](docs/Api/ServiceInstancesApi.md#getinstance) | **GET** /paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances/{serviceId} | View a Service Instance
*ServiceInstancesApi* | [**getJobStatus**](docs/Api/ServiceInstancesApi.md#getjobstatus) | **GET** /paas/api/v1.1/activitylog/{identityDomainId}/job/{jobId} | View the Activity Log of a Job
*ServiceInstancesApi* | [**scaleInstance**](docs/Api/ServiceInstancesApi.md#scaleinstance) | **POST** /paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances/{serviceId}/hosts/scale | Scale a MySQL Cloud Service instance
*ServiceInstancesApi* | [**updateInstanceStatus**](docs/Api/ServiceInstancesApi.md#updateinstancestatus) | **POST** /paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances/{serviceId}/hosts/{function} | Start, Stop, or Restart a Service Instance


## Documentation For Models

 - [AccessRulesActivities](docs/Model/AccessRulesActivities.md)
 - [AccessRulesAddPostRequest](docs/Model/AccessRulesAddPostRequest.md)
 - [AccessRulesDetails](docs/Model/AccessRulesDetails.md)
 - [AccessRulesErrors](docs/Model/AccessRulesErrors.md)
 - [AccessRulesUpdatePutRequest](docs/Model/AccessRulesUpdatePutRequest.md)
 - [AccessRulesViewResponse](docs/Model/AccessRulesViewResponse.md)
 - [BackupAcceptedResponse](docs/Model/BackupAcceptedResponse.md)
 - [BackupConfigPostRequest](docs/Model/BackupConfigPostRequest.md)
 - [BackupConfigResponse](docs/Model/BackupConfigResponse.md)
 - [BackupConfigSchedule](docs/Model/BackupConfigSchedule.md)
 - [BackupDeleteInfo](docs/Model/BackupDeleteInfo.md)
 - [BackupDeleteRequest](docs/Model/BackupDeleteRequest.md)
 - [BackupJobHistory](docs/Model/BackupJobHistory.md)
 - [BackupOndemandRequest](docs/Model/BackupOndemandRequest.md)
 - [BackupRestorationPostRequest](docs/Model/BackupRestorationPostRequest.md)
 - [BackupRestoreHistory](docs/Model/BackupRestoreHistory.md)
 - [BackupSchedule](docs/Model/BackupSchedule.md)
 - [BackupViewAllDeletedResponse](docs/Model/BackupViewAllDeletedResponse.md)
 - [BackupViewAllResponse](docs/Model/BackupViewAllResponse.md)
 - [BackupViewAllRestorationsResponse](docs/Model/BackupViewAllRestorationsResponse.md)
 - [BackupViewDeletedResponse](docs/Model/BackupViewDeletedResponse.md)
 - [BackupViewInfo](docs/Model/BackupViewInfo.md)
 - [BackupViewResponse](docs/Model/BackupViewResponse.md)
 - [MonitorComponentsResponse](docs/Model/MonitorComponentsResponse.md)
 - [MonitorHealthData](docs/Model/MonitorHealthData.md)
 - [MonitorResponse](docs/Model/MonitorResponse.md)
 - [MonitorVm](docs/Model/MonitorVm.md)
 - [MonitorVmServerInfo](docs/Model/MonitorVmServerInfo.md)
 - [MonitorvmHealthData](docs/Model/MonitorvmHealthData.md)
 - [MonitorvmserverinfoHealthData](docs/Model/MonitorvmserverinfoHealthData.md)
 - [PatchAcceptedResponse](docs/Model/PatchAcceptedResponse.md)
 - [PatchAppliedAllResponse](docs/Model/PatchAppliedAllResponse.md)
 - [PatchAppliedResponse](docs/Model/PatchAppliedResponse.md)
 - [PatchApplyRequestRequest](docs/Model/PatchApplyRequestRequest.md)
 - [PatchAvailableResponse](docs/Model/PatchAvailableResponse.md)
 - [PatchComponentAppliedInfo](docs/Model/PatchComponentAppliedInfo.md)
 - [PatchComponentDetailsInfo](docs/Model/PatchComponentDetailsInfo.md)
 - [PatchPrecheckViewResponse](docs/Model/PatchPrecheckViewResponse.md)
 - [PatchResultInfo](docs/Model/PatchResultInfo.md)
 - [PatchRollbackRequest](docs/Model/PatchRollbackRequest.md)
 - [PatchRollbackResult](docs/Model/PatchRollbackResult.md)
 - [PatchZipBundleInfo](docs/Model/PatchZipBundleInfo.md)
 - [PatchavailableresponseAvailablePatchGuiMetadata](docs/Model/PatchavailableresponseAvailablePatchGuiMetadata.md)
 - [PatchresultinfoAdditionalNote](docs/Model/PatchresultinfoAdditionalNote.md)
 - [ServiceAcceptedResponse](docs/Model/ServiceAcceptedResponse.md)
 - [ServiceAddStorageComponentsPostRequest](docs/Model/ServiceAddStorageComponentsPostRequest.md)
 - [ServiceAddStoragePostRequest](docs/Model/ServiceAddStoragePostRequest.md)
 - [ServiceAttributes](docs/Model/ServiceAttributes.md)
 - [ServiceChangeInstanceStatusRequest](docs/Model/ServiceChangeInstanceStatusRequest.md)
 - [ServiceCreateInstanceComponentParameters](docs/Model/ServiceCreateInstanceComponentParameters.md)
 - [ServiceCreateInstanceParameters](docs/Model/ServiceCreateInstanceParameters.md)
 - [ServiceCreateInstanceRequest](docs/Model/ServiceCreateInstanceRequest.md)
 - [ServiceCreateInstanceServiceParameters](docs/Model/ServiceCreateInstanceServiceParameters.md)
 - [ServiceDeleteInstancePutRequest](docs/Model/ServiceDeleteInstancePutRequest.md)
 - [ServiceMessageItem](docs/Model/ServiceMessageItem.md)
 - [ServiceScaleComponentsPostRequest](docs/Model/ServiceScaleComponentsPostRequest.md)
 - [ServiceScalePostRequest](docs/Model/ServiceScalePostRequest.md)
 - [ServiceViewActivityLog](docs/Model/ServiceViewActivityLog.md)
 - [ServiceViewAllInstances](docs/Model/ServiceViewAllInstances.md)
 - [ServiceViewComponents](docs/Model/ServiceViewComponents.md)
 - [ServiceViewCurrentOperation](docs/Model/ServiceViewCurrentOperation.md)
 - [ServiceViewInstance](docs/Model/ServiceViewInstance.md)
 - [ServiceViewPatching](docs/Model/ServiceViewPatching.md)
 - [ServiceViewStorageVolume](docs/Model/ServiceViewStorageVolume.md)
 - [ServiceVmInstanceDetails](docs/Model/ServiceVmInstanceDetails.md)
 - [ServiceVmInstanceServerInfo](docs/Model/ServiceVmInstanceServerInfo.md)
 - [SshAddKeyPostRequest](docs/Model/SshAddKeyPostRequest.md)
 - [SshAddKeyResponse](docs/Model/SshAddKeyResponse.md)
 - [SshGetKeyDescriptionResponse](docs/Model/SshGetKeyDescriptionResponse.md)
 - [SshGetKeyDetailsResponse](docs/Model/SshGetKeyDetailsResponse.md)
 - [SshGetKeyItems](docs/Model/SshGetKeyItems.md)
 - [SshGetKeyResponse](docs/Model/SshGetKeyResponse.md)
 - [SshKeyDescriptionItem](docs/Model/SshKeyDescriptionItem.md)


## Documentation For Authorization


## defaultBasicAuth

- **Type**: HTTP basic authentication

## defaultApiKey

- **Type**: API key
- **API key parameter name**: X-ID-TENANT-NAME
- **Location**: HTTP header


## Author




