<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/admin/database/v1/backup.proto

namespace Google\Cloud\Spanner\Admin\Database\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A backup of a Cloud Spanner database.
 *
 * Generated from protobuf message <code>google.spanner.admin.database.v1.Backup</code>
 */
class Backup extends \Google\Protobuf\Internal\Message
{
    /**
     * Required for the [CreateBackup][google.spanner.admin.database.v1.DatabaseAdmin.CreateBackup] operation.
     * Name of the database from which this backup was
     * created. This needs to be in the same instance as the backup.
     * Values are of the form
     * `projects/<project>/instances/<instance>/databases/<database>`.
     *
     * Generated from protobuf field <code>string database = 2 [(.google.api.resource_reference) = {</code>
     */
    protected $database = '';
    /**
     * The backup will contain an externally consistent copy of the database at
     * the timestamp specified by `version_time`. If `version_time` is not
     * specified, the system will set `version_time` to the `create_time` of the
     * backup.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp version_time = 9;</code>
     */
    protected $version_time = null;
    /**
     * Required for the [CreateBackup][google.spanner.admin.database.v1.DatabaseAdmin.CreateBackup]
     * operation. The expiration time of the backup, with microseconds
     * granularity that must be at least 6 hours and at most 366 days
     * from the time the CreateBackup request is processed. Once the `expire_time`
     * has passed, the backup is eligible to be automatically deleted by Cloud
     * Spanner to free the resources used by the backup.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_time = 3;</code>
     */
    protected $expire_time = null;
    /**
     * Output only for the [CreateBackup][google.spanner.admin.database.v1.DatabaseAdmin.CreateBackup] operation.
     * Required for the [UpdateBackup][google.spanner.admin.database.v1.DatabaseAdmin.UpdateBackup] operation.
     * A globally unique identifier for the backup which cannot be
     * changed. Values are of the form
     * `projects/<project>/instances/<instance>/backups/[a-z][a-z0-9_\-]*[a-z0-9]`
     * The final segment of the name must be between 2 and 60 characters
     * in length.
     * The backup is stored in the location(s) specified in the instance
     * configuration of the instance containing the backup, identified
     * by the prefix of the backup name of the form
     * `projects/<project>/instances/<instance>`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Output only. The time the [CreateBackup][google.spanner.admin.database.v1.DatabaseAdmin.CreateBackup]
     * request is received. If the request does not specify `version_time`, the
     * `version_time` of the backup will be equivalent to the `create_time`.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. Size of the backup in bytes.
     *
     * Generated from protobuf field <code>int64 size_bytes = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $size_bytes = 0;
    /**
     * Output only. The current state of the backup.
     *
     * Generated from protobuf field <code>.google.spanner.admin.database.v1.Backup.State state = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state = 0;
    /**
     * Output only. The names of the restored databases that reference the backup.
     * The database names are of
     * the form `projects/<project>/instances/<instance>/databases/<database>`.
     * Referencing databases may exist in different instances. The existence of
     * any referencing database prevents the backup from being deleted. When a
     * restored database from the backup enters the `READY` state, the reference
     * to the backup is removed.
     *
     * Generated from protobuf field <code>repeated string referencing_databases = 7 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    private $referencing_databases;
    /**
     * Output only. The encryption information for the backup.
     *
     * Generated from protobuf field <code>.google.spanner.admin.database.v1.EncryptionInfo encryption_info = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $encryption_info = null;
    /**
     * Output only. The database dialect information for the backup.
     *
     * Generated from protobuf field <code>.google.spanner.admin.database.v1.DatabaseDialect database_dialect = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $database_dialect = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $database
     *           Required for the [CreateBackup][google.spanner.admin.database.v1.DatabaseAdmin.CreateBackup] operation.
     *           Name of the database from which this backup was
     *           created. This needs to be in the same instance as the backup.
     *           Values are of the form
     *           `projects/<project>/instances/<instance>/databases/<database>`.
     *     @type \Google\Protobuf\Timestamp $version_time
     *           The backup will contain an externally consistent copy of the database at
     *           the timestamp specified by `version_time`. If `version_time` is not
     *           specified, the system will set `version_time` to the `create_time` of the
     *           backup.
     *     @type \Google\Protobuf\Timestamp $expire_time
     *           Required for the [CreateBackup][google.spanner.admin.database.v1.DatabaseAdmin.CreateBackup]
     *           operation. The expiration time of the backup, with microseconds
     *           granularity that must be at least 6 hours and at most 366 days
     *           from the time the CreateBackup request is processed. Once the `expire_time`
     *           has passed, the backup is eligible to be automatically deleted by Cloud
     *           Spanner to free the resources used by the backup.
     *     @type string $name
     *           Output only for the [CreateBackup][google.spanner.admin.database.v1.DatabaseAdmin.CreateBackup] operation.
     *           Required for the [UpdateBackup][google.spanner.admin.database.v1.DatabaseAdmin.UpdateBackup] operation.
     *           A globally unique identifier for the backup which cannot be
     *           changed. Values are of the form
     *           `projects/<project>/instances/<instance>/backups/[a-z][a-z0-9_\-]*[a-z0-9]`
     *           The final segment of the name must be between 2 and 60 characters
     *           in length.
     *           The backup is stored in the location(s) specified in the instance
     *           configuration of the instance containing the backup, identified
     *           by the prefix of the backup name of the form
     *           `projects/<project>/instances/<instance>`.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time the [CreateBackup][google.spanner.admin.database.v1.DatabaseAdmin.CreateBackup]
     *           request is received. If the request does not specify `version_time`, the
     *           `version_time` of the backup will be equivalent to the `create_time`.
     *     @type int|string $size_bytes
     *           Output only. Size of the backup in bytes.
     *     @type int $state
     *           Output only. The current state of the backup.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $referencing_databases
     *           Output only. The names of the restored databases that reference the backup.
     *           The database names are of
     *           the form `projects/<project>/instances/<instance>/databases/<database>`.
     *           Referencing databases may exist in different instances. The existence of
     *           any referencing database prevents the backup from being deleted. When a
     *           restored database from the backup enters the `READY` state, the reference
     *           to the backup is removed.
     *     @type \Google\Cloud\Spanner\Admin\Database\V1\EncryptionInfo $encryption_info
     *           Output only. The encryption information for the backup.
     *     @type int $database_dialect
     *           Output only. The database dialect information for the backup.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Spanner\Admin\Database\V1\Backup::initOnce();
        parent::__construct($data);
    }

    /**
     * Required for the [CreateBackup][google.spanner.admin.database.v1.DatabaseAdmin.CreateBackup] operation.
     * Name of the database from which this backup was
     * created. This needs to be in the same instance as the backup.
     * Values are of the form
     * `projects/<project>/instances/<instance>/databases/<database>`.
     *
     * Generated from protobuf field <code>string database = 2 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getDatabase()
    {
        return $this->database;
    }

    /**
     * Required for the [CreateBackup][google.spanner.admin.database.v1.DatabaseAdmin.CreateBackup] operation.
     * Name of the database from which this backup was
     * created. This needs to be in the same instance as the backup.
     * Values are of the form
     * `projects/<project>/instances/<instance>/databases/<database>`.
     *
     * Generated from protobuf field <code>string database = 2 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setDatabase($var)
    {
        GPBUtil::checkString($var, True);
        $this->database = $var;

        return $this;
    }

    /**
     * The backup will contain an externally consistent copy of the database at
     * the timestamp specified by `version_time`. If `version_time` is not
     * specified, the system will set `version_time` to the `create_time` of the
     * backup.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp version_time = 9;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getVersionTime()
    {
        return $this->version_time;
    }

    public function hasVersionTime()
    {
        return isset($this->version_time);
    }

    public function clearVersionTime()
    {
        unset($this->version_time);
    }

    /**
     * The backup will contain an externally consistent copy of the database at
     * the timestamp specified by `version_time`. If `version_time` is not
     * specified, the system will set `version_time` to the `create_time` of the
     * backup.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp version_time = 9;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setVersionTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->version_time = $var;

        return $this;
    }

    /**
     * Required for the [CreateBackup][google.spanner.admin.database.v1.DatabaseAdmin.CreateBackup]
     * operation. The expiration time of the backup, with microseconds
     * granularity that must be at least 6 hours and at most 366 days
     * from the time the CreateBackup request is processed. Once the `expire_time`
     * has passed, the backup is eligible to be automatically deleted by Cloud
     * Spanner to free the resources used by the backup.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_time = 3;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getExpireTime()
    {
        return $this->expire_time;
    }

    public function hasExpireTime()
    {
        return isset($this->expire_time);
    }

    public function clearExpireTime()
    {
        unset($this->expire_time);
    }

    /**
     * Required for the [CreateBackup][google.spanner.admin.database.v1.DatabaseAdmin.CreateBackup]
     * operation. The expiration time of the backup, with microseconds
     * granularity that must be at least 6 hours and at most 366 days
     * from the time the CreateBackup request is processed. Once the `expire_time`
     * has passed, the backup is eligible to be automatically deleted by Cloud
     * Spanner to free the resources used by the backup.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_time = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setExpireTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->expire_time = $var;

        return $this;
    }

    /**
     * Output only for the [CreateBackup][google.spanner.admin.database.v1.DatabaseAdmin.CreateBackup] operation.
     * Required for the [UpdateBackup][google.spanner.admin.database.v1.DatabaseAdmin.UpdateBackup] operation.
     * A globally unique identifier for the backup which cannot be
     * changed. Values are of the form
     * `projects/<project>/instances/<instance>/backups/[a-z][a-z0-9_\-]*[a-z0-9]`
     * The final segment of the name must be between 2 and 60 characters
     * in length.
     * The backup is stored in the location(s) specified in the instance
     * configuration of the instance containing the backup, identified
     * by the prefix of the backup name of the form
     * `projects/<project>/instances/<instance>`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only for the [CreateBackup][google.spanner.admin.database.v1.DatabaseAdmin.CreateBackup] operation.
     * Required for the [UpdateBackup][google.spanner.admin.database.v1.DatabaseAdmin.UpdateBackup] operation.
     * A globally unique identifier for the backup which cannot be
     * changed. Values are of the form
     * `projects/<project>/instances/<instance>/backups/[a-z][a-z0-9_\-]*[a-z0-9]`
     * The final segment of the name must be between 2 and 60 characters
     * in length.
     * The backup is stored in the location(s) specified in the instance
     * configuration of the instance containing the backup, identified
     * by the prefix of the backup name of the form
     * `projects/<project>/instances/<instance>`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Output only. The time the [CreateBackup][google.spanner.admin.database.v1.DatabaseAdmin.CreateBackup]
     * request is received. If the request does not specify `version_time`, the
     * `version_time` of the backup will be equivalent to the `create_time`.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. The time the [CreateBackup][google.spanner.admin.database.v1.DatabaseAdmin.CreateBackup]
     * request is received. If the request does not specify `version_time`, the
     * `version_time` of the backup will be equivalent to the `create_time`.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. Size of the backup in bytes.
     *
     * Generated from protobuf field <code>int64 size_bytes = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getSizeBytes()
    {
        return $this->size_bytes;
    }

    /**
     * Output only. Size of the backup in bytes.
     *
     * Generated from protobuf field <code>int64 size_bytes = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setSizeBytes($var)
    {
        GPBUtil::checkInt64($var);
        $this->size_bytes = $var;

        return $this;
    }

    /**
     * Output only. The current state of the backup.
     *
     * Generated from protobuf field <code>.google.spanner.admin.database.v1.Backup.State state = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. The current state of the backup.
     *
     * Generated from protobuf field <code>.google.spanner.admin.database.v1.Backup.State state = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Spanner\Admin\Database\V1\Backup\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. The names of the restored databases that reference the backup.
     * The database names are of
     * the form `projects/<project>/instances/<instance>/databases/<database>`.
     * Referencing databases may exist in different instances. The existence of
     * any referencing database prevents the backup from being deleted. When a
     * restored database from the backup enters the `READY` state, the reference
     * to the backup is removed.
     *
     * Generated from protobuf field <code>repeated string referencing_databases = 7 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getReferencingDatabases()
    {
        return $this->referencing_databases;
    }

    /**
     * Output only. The names of the restored databases that reference the backup.
     * The database names are of
     * the form `projects/<project>/instances/<instance>/databases/<database>`.
     * Referencing databases may exist in different instances. The existence of
     * any referencing database prevents the backup from being deleted. When a
     * restored database from the backup enters the `READY` state, the reference
     * to the backup is removed.
     *
     * Generated from protobuf field <code>repeated string referencing_databases = 7 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setReferencingDatabases($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->referencing_databases = $arr;

        return $this;
    }

    /**
     * Output only. The encryption information for the backup.
     *
     * Generated from protobuf field <code>.google.spanner.admin.database.v1.EncryptionInfo encryption_info = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Spanner\Admin\Database\V1\EncryptionInfo|null
     */
    public function getEncryptionInfo()
    {
        return $this->encryption_info;
    }

    public function hasEncryptionInfo()
    {
        return isset($this->encryption_info);
    }

    public function clearEncryptionInfo()
    {
        unset($this->encryption_info);
    }

    /**
     * Output only. The encryption information for the backup.
     *
     * Generated from protobuf field <code>.google.spanner.admin.database.v1.EncryptionInfo encryption_info = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Spanner\Admin\Database\V1\EncryptionInfo $var
     * @return $this
     */
    public function setEncryptionInfo($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Spanner\Admin\Database\V1\EncryptionInfo::class);
        $this->encryption_info = $var;

        return $this;
    }

    /**
     * Output only. The database dialect information for the backup.
     *
     * Generated from protobuf field <code>.google.spanner.admin.database.v1.DatabaseDialect database_dialect = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getDatabaseDialect()
    {
        return $this->database_dialect;
    }

    /**
     * Output only. The database dialect information for the backup.
     *
     * Generated from protobuf field <code>.google.spanner.admin.database.v1.DatabaseDialect database_dialect = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setDatabaseDialect($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Spanner\Admin\Database\V1\DatabaseDialect::class);
        $this->database_dialect = $var;

        return $this;
    }

}

