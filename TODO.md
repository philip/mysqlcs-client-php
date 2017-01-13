# TODO and TODONE Items

A list of things to do that could make this generated code more useful:

## TODO ##

* Add identity_domain_id definition to `lib/Configuration.php`
* Add service_id definition to `lib/Configuration.php`
* Remove the x_id_tenant_name requirement (will do by fixing swagger definitions)
* Figure out why the test cases are all empty, consider making them useful
* Determine if the SwaggerClient-php/ root dir should be kept -- swagger_codegen generates this, currently I move its contents here
* Eventually create separate branches that depend on the source swagger file used. Currently only master exists, and it typically uses an edited swagger file rather than the one online.

## TODONE ##

* ~~Figure out why four methods are defined twice, thus causing fatal 'Cannot redeclare' errors. They are:~~
  * ~~`lib'Model/AcceptedResponse.php`: `getJobId()` and `setJobId($job_id)`~~
    * Solution: multiple source files defined a model named accepted-response, so when merged, entries from all were merged into one big accepted-response model. So, jobId and job_id do not belong in the same model. Granted having jobId and job_id in one model should not produce broken PHP code. This bug was reported and is explained here: https://github.com/swagger-api/swagger-codegen/issues/4551 
    * Note: `AcceptedResponse.php` no longer exists, as now `ServiceAcceptedResponse.php` is generated instead. This is because all models now follow a naming convention where prefixes are singular versions of the lib/Api prefixes e.g., Services -> Service. This conventin is still under RFC.
  * ~~`lib/Model/ViewInstance.php`: `getCloudStorageContainer()` and `setCloudStorageContainer($cloud_storage_container)`~~
    * Solution: the cloudStorageContainer entry was removed, as it should not have been part of the response. However, as mentione above, this should not have produced invalid PHP code, see the quoted bug for details. 
  * ~~Also, `$swaggerTypes`, `$attributeMap`, `$setters`, and `$getters` definitions within those files contain duplicate definitions~~
  * ~~Note: related info for debugging, `$attributeMap` in `AcceptedResponse.php` contains `'job_id' => 'jobId'` and `'job_id' => 'job_id'` so research the jobId vs job_id values.~~
  * ~~Note: related info for debugging, `$attributeMap` in `ViewInstance.php` contains `'cloud_storage_container' => 'cloudStorageContainer'` and `'cloud_storage_container' => 'CLOUD_STORAGE_CONTAINER'` ...~~
* ~~Related to the duplicate methods, also confirm fixing that removes the related duplicate tests:~~
  * See solution above as it also fixed this.
  * ~~`test/Model/AcceptedResponseTest.php` :: // Test attribute "job_id" `testPropertyJobId()`~~
  * ~~`test/Model/ViewInstanceTest.php`     :: // Test attribute "cloud_storage_container" `testPropertyCloudStorageContainer()`~~
* ~~Fix issue where defining a host is assumed, as otherwise https://localhost is used and `lib/Configuration.php` is ignored~~
  * Filed issue https://github.com/swagger-api/swagger-codegen/issues/4518 and it's closed, fixed in `swagger_codegen 2.2.2`


