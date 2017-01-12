# TODO

A list of things to do that could make this generated code more useful:

* Add identity_domain_id definition to `lib/Configuration.php`
* Add service_id definition to `lib/Configuration.php`
* Remove the x_id_tenant_name requirement (will do by fixing swagger definitions)
* Figure out why the test cases are all empty
* Figure out why four methods are defined twice, thus causing fatal 'Cannot redeclare' errors. They are:
  * `lib'Model/AcceptedResponse.php`: `getJobId()` and `setJobId($job_id)`
  * `lib/Model/ViewInstance.php`: `getCloudStorageContainer()` and `setCloudStorageContainer($cloud_storage_container)`
  * Also, `$swaggerTypes`, `$attributeMap`, `$setters`, and `$getters` definitions within those files contain duplicate definitions e.g., for 'job_id'
  * Note: related info for debugging, `$attributeMap` in `AcceptedResponse.php` contains `'job_id' => 'jobId'` and `'job_id' => 'job_id'` so research the jobId vs job_id values.
  * Note: related info for debugging, `$attributeMap` in `ViewInstance.php` contains `'cloud_storage_container' => 'cloudStorageContainer'` and `'cloud_storage_container' => 'CLOUD_STORAGE_CONTAINER'` ...
* Related to the duplicate methods, also confirm fixing that removes the related duplicate tests:
  * `test/Model/AcceptedResponseTest.php` :: // Test attribute "job_id" `testPropertyJobId()`
  * `test/Model/ViewInstanceTest.php`     :: // Test attribute "cloud_storage_container" `testPropertyCloudStorageContainer()`
* Fix issue where defining a host is assumed, as otherwise https://localhost is used and `lib/Configuration.php` is ignored (filed a swagger_codegen bug for this)
* Determine if the SwaggerClient-php/ root dir should be kept

