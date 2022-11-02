<?hh
/**
 * Autogenerated by Thrift
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */

/**
 * Original thrift service:-
 * MyServicePrioParent
 */
interface MyServicePrioParentAsyncIf extends \IThriftAsyncIf {
  /**
   * Original thrift definition:-
   * void
   *   ping();
   */
  public function ping(): Awaitable<void>;

  /**
   * Original thrift definition:-
   * void
   *   pong();
   */
  public function pong(): Awaitable<void>;
}

/**
 * Original thrift service:-
 * MyServicePrioParent
 */
interface MyServicePrioParentIf extends \IThriftSyncIf {
  /**
   * Original thrift definition:-
   * void
   *   ping();
   */
  public function ping(): void;

  /**
   * Original thrift definition:-
   * void
   *   pong();
   */
  public function pong(): void;
}

/**
 * Original thrift service:-
 * MyServicePrioParent
 */
interface MyServicePrioParentAsyncClientIf extends MyServicePrioParentAsyncIf {
}

/**
 * Original thrift service:-
 * MyServicePrioParent
 */
interface MyServicePrioParentClientIf extends \IThriftSyncIf {
  /**
   * Original thrift definition:-
   * void
   *   ping();
   */
  public function ping(): Awaitable<void>;

  /**
   * Original thrift definition:-
   * void
   *   pong();
   */
  public function pong(): Awaitable<void>;
}

/**
 * Original thrift service:-
 * MyServicePrioParent
 */
trait MyServicePrioParentClientBase {
  require extends \ThriftClientBase;

}

class MyServicePrioParentAsyncClient extends \ThriftClientBase implements MyServicePrioParentAsyncClientIf {
  use MyServicePrioParentClientBase;

  /**
   * Original thrift definition:-
   * void
   *   ping();
   */
  public async function ping(): Awaitable<void> {
    $hh_frame_metadata = $this->getHHFrameMetadata();
    if ($hh_frame_metadata !== null) {
      \HH\set_frame_metadata($hh_frame_metadata);
    }
    $rpc_options = $this->getAndResetOptions() ?? \ThriftClientBase::defaultOptions();
    $args = MyServicePrioParent_ping_args::withDefaultValues();
    await $this->asyncHandler_->genBefore("MyServicePrioParent", "ping", $args);
    $currentseqid = $this->sendImplHelper($args, "ping", false);
    await $this->genAwaitResponse(MyServicePrioParent_ping_result::class, "ping", true, $currentseqid, $rpc_options);
  }

  /**
   * Original thrift definition:-
   * void
   *   pong();
   */
  public async function pong(): Awaitable<void> {
    $hh_frame_metadata = $this->getHHFrameMetadata();
    if ($hh_frame_metadata !== null) {
      \HH\set_frame_metadata($hh_frame_metadata);
    }
    $rpc_options = $this->getAndResetOptions() ?? \ThriftClientBase::defaultOptions();
    $args = MyServicePrioParent_pong_args::withDefaultValues();
    await $this->asyncHandler_->genBefore("MyServicePrioParent", "pong", $args);
    $currentseqid = $this->sendImplHelper($args, "pong", false);
    await $this->genAwaitResponse(MyServicePrioParent_pong_result::class, "pong", true, $currentseqid, $rpc_options);
  }

}

class MyServicePrioParentClient extends \ThriftClientBase implements MyServicePrioParentClientIf {
  use MyServicePrioParentClientBase;

  /**
   * Original thrift definition:-
   * void
   *   ping();
   */
  public async function ping(): Awaitable<void> {
    $hh_frame_metadata = $this->getHHFrameMetadata();
    if ($hh_frame_metadata !== null) {
      \HH\set_frame_metadata($hh_frame_metadata);
    }
    $rpc_options = $this->getAndResetOptions() ?? \ThriftClientBase::defaultOptions();
    $args = MyServicePrioParent_ping_args::withDefaultValues();
    await $this->asyncHandler_->genBefore("MyServicePrioParent", "ping", $args);
    $currentseqid = $this->sendImplHelper($args, "ping", false);
    await $this->genAwaitResponse(MyServicePrioParent_ping_result::class, "ping", true, $currentseqid, $rpc_options);
  }

  /**
   * Original thrift definition:-
   * void
   *   pong();
   */
  public async function pong(): Awaitable<void> {
    $hh_frame_metadata = $this->getHHFrameMetadata();
    if ($hh_frame_metadata !== null) {
      \HH\set_frame_metadata($hh_frame_metadata);
    }
    $rpc_options = $this->getAndResetOptions() ?? \ThriftClientBase::defaultOptions();
    $args = MyServicePrioParent_pong_args::withDefaultValues();
    await $this->asyncHandler_->genBefore("MyServicePrioParent", "pong", $args);
    $currentseqid = $this->sendImplHelper($args, "pong", false);
    await $this->genAwaitResponse(MyServicePrioParent_pong_result::class, "pong", true, $currentseqid, $rpc_options);
  }

  /* send and recv functions */
  public function send_ping(): int {
    $args = MyServicePrioParent_ping_args::withDefaultValues();
    return $this->sendImplHelper($args, "ping", false);
  }
  public function recv_ping(?int $expectedsequenceid = null): void {
    $this->recvImplHelper(MyServicePrioParent_ping_result::class, "ping", true, $expectedsequenceid);
  }
  public function send_pong(): int {
    $args = MyServicePrioParent_pong_args::withDefaultValues();
    return $this->sendImplHelper($args, "pong", false);
  }
  public function recv_pong(?int $expectedsequenceid = null): void {
    $this->recvImplHelper(MyServicePrioParent_pong_result::class, "pong", true, $expectedsequenceid);
  }
}

abstract class MyServicePrioParentAsyncProcessorBase extends \ThriftAsyncProcessor {
  abstract const type TThriftIf as MyServicePrioParentAsyncIf;
  const classname<\IThriftServiceStaticMetadata> SERVICE_METADATA_CLASS = MyServicePrioParentStaticMetadata::class;

  protected async function process_ping(int $seqid, \TProtocol $input, \TProtocol $output): Awaitable<void> {
    $handler_ctx = $this->eventHandler_->getHandlerContext('ping');
    $reply_type = \TMessageType::REPLY;

    $this->eventHandler_->preRead($handler_ctx, 'ping', dict[]);

    if ($input is \TBinaryProtocolAccelerated) {
      $args = \thrift_protocol_read_binary_struct($input, 'MyServicePrioParent_ping_args');
    } else if ($input is \TCompactProtocolAccelerated) {
      $args = \thrift_protocol_read_compact_struct($input, 'MyServicePrioParent_ping_args');
    } else {
      $args = MyServicePrioParent_ping_args::withDefaultValues();
      $args->read($input);
    }
    $input->readMessageEnd();
    $this->eventHandler_->postRead($handler_ctx, 'ping', $args);
    $result = MyServicePrioParent_ping_result::withDefaultValues();
    try {
      $this->eventHandler_->preExec($handler_ctx, 'MyServicePrioParent', 'ping', $args);
      await $this->handler->ping();
      $this->eventHandler_->postExec($handler_ctx, 'ping', $result);
    } catch (\Exception $ex) {
      $reply_type = \TMessageType::EXCEPTION;
      $this->eventHandler_->handlerError($handler_ctx, 'ping', $ex);
      $result = new \TApplicationException($ex->getMessage()."\n".$ex->getTraceAsString());
    }
    $this->eventHandler_->preWrite($handler_ctx, 'ping', $result);
    if ($output is \TBinaryProtocolAccelerated)
    {
      \thrift_protocol_write_binary($output, 'ping', $reply_type, $result, $seqid, $output->isStrictWrite());
    }
    else if ($output is \TCompactProtocolAccelerated)
    {
      \thrift_protocol_write_compact2($output, 'ping', $reply_type, $result, $seqid, false, \TCompactProtocolBase::VERSION);
    }
    else
    {
      $output->writeMessageBegin("ping", $reply_type, $seqid);
      $result->write($output);
      $output->writeMessageEnd();
      $output->getTransport()->flush();
    }
    $this->eventHandler_->postWrite($handler_ctx, 'ping', $result);
  }
  protected async function process_pong(int $seqid, \TProtocol $input, \TProtocol $output): Awaitable<void> {
    $handler_ctx = $this->eventHandler_->getHandlerContext('pong');
    $reply_type = \TMessageType::REPLY;

    $this->eventHandler_->preRead($handler_ctx, 'pong', dict[]);

    if ($input is \TBinaryProtocolAccelerated) {
      $args = \thrift_protocol_read_binary_struct($input, 'MyServicePrioParent_pong_args');
    } else if ($input is \TCompactProtocolAccelerated) {
      $args = \thrift_protocol_read_compact_struct($input, 'MyServicePrioParent_pong_args');
    } else {
      $args = MyServicePrioParent_pong_args::withDefaultValues();
      $args->read($input);
    }
    $input->readMessageEnd();
    $this->eventHandler_->postRead($handler_ctx, 'pong', $args);
    $result = MyServicePrioParent_pong_result::withDefaultValues();
    try {
      $this->eventHandler_->preExec($handler_ctx, 'MyServicePrioParent', 'pong', $args);
      await $this->handler->pong();
      $this->eventHandler_->postExec($handler_ctx, 'pong', $result);
    } catch (\Exception $ex) {
      $reply_type = \TMessageType::EXCEPTION;
      $this->eventHandler_->handlerError($handler_ctx, 'pong', $ex);
      $result = new \TApplicationException($ex->getMessage()."\n".$ex->getTraceAsString());
    }
    $this->eventHandler_->preWrite($handler_ctx, 'pong', $result);
    if ($output is \TBinaryProtocolAccelerated)
    {
      \thrift_protocol_write_binary($output, 'pong', $reply_type, $result, $seqid, $output->isStrictWrite());
    }
    else if ($output is \TCompactProtocolAccelerated)
    {
      \thrift_protocol_write_compact2($output, 'pong', $reply_type, $result, $seqid, false, \TCompactProtocolBase::VERSION);
    }
    else
    {
      $output->writeMessageBegin("pong", $reply_type, $seqid);
      $result->write($output);
      $output->writeMessageEnd();
      $output->getTransport()->flush();
    }
    $this->eventHandler_->postWrite($handler_ctx, 'pong', $result);
  }
  protected async function process_getThriftServiceMetadata(int $seqid, \TProtocol $input, \TProtocol $output): Awaitable<void> {
    $reply_type = \TMessageType::REPLY;

    if ($input is \TBinaryProtocolAccelerated) {
      $args = \thrift_protocol_read_binary_struct($input, '\tmeta_ThriftMetadataService_getThriftServiceMetadata_args');
    } else if ($input is \TCompactProtocolAccelerated) {
      $args = \thrift_protocol_read_compact_struct($input, '\tmeta_ThriftMetadataService_getThriftServiceMetadata_args');
    } else {
      $args = \tmeta_ThriftMetadataService_getThriftServiceMetadata_args::withDefaultValues();
      $args->read($input);
    }
    $input->readMessageEnd();
    $result = \tmeta_ThriftMetadataService_getThriftServiceMetadata_result::withDefaultValues();
    try {
      $result->success = MyServicePrioParentStaticMetadata::getServiceMetadataResponse();
    } catch (\Exception $ex) {
      $reply_type = \TMessageType::EXCEPTION;
      $result = new \TApplicationException($ex->getMessage()."\n".$ex->getTraceAsString());
    }
    if ($output is \TBinaryProtocolAccelerated)
    {
      \thrift_protocol_write_binary($output, 'getThriftServiceMetadata', $reply_type, $result, $seqid, $output->isStrictWrite());
    }
    else if ($output is \TCompactProtocolAccelerated)
    {
      \thrift_protocol_write_compact2($output, 'getThriftServiceMetadata', $reply_type, $result, $seqid, false, \TCompactProtocolBase::VERSION);
    }
    else
    {
      $output->writeMessageBegin("getThriftServiceMetadata", $reply_type, $seqid);
      $result->write($output);
      $output->writeMessageEnd();
      $output->getTransport()->flush();
    }
  }
}
class MyServicePrioParentAsyncProcessor extends MyServicePrioParentAsyncProcessorBase {
  const type TThriftIf = MyServicePrioParentAsyncIf;
}

abstract class MyServicePrioParentSyncProcessorBase extends \ThriftSyncProcessor {
  abstract const type TThriftIf as MyServicePrioParentIf;
  const classname<\IThriftServiceStaticMetadata> SERVICE_METADATA_CLASS = MyServicePrioParentStaticMetadata::class;

  protected function process_ping(int $seqid, \TProtocol $input, \TProtocol $output): void {
    $handler_ctx = $this->eventHandler_->getHandlerContext('ping');
    $reply_type = \TMessageType::REPLY;

    $this->eventHandler_->preRead($handler_ctx, 'ping', dict[]);

    if ($input is \TBinaryProtocolAccelerated) {
      $args = \thrift_protocol_read_binary_struct($input, 'MyServicePrioParent_ping_args');
    } else if ($input is \TCompactProtocolAccelerated) {
      $args = \thrift_protocol_read_compact_struct($input, 'MyServicePrioParent_ping_args');
    } else {
      $args = MyServicePrioParent_ping_args::withDefaultValues();
      $args->read($input);
    }
    $input->readMessageEnd();
    $this->eventHandler_->postRead($handler_ctx, 'ping', $args);
    $result = MyServicePrioParent_ping_result::withDefaultValues();
    try {
      $this->eventHandler_->preExec($handler_ctx, 'MyServicePrioParent', 'ping', $args);
      $this->handler->ping();
      $this->eventHandler_->postExec($handler_ctx, 'ping', $result);
    } catch (\Exception $ex) {
      $reply_type = \TMessageType::EXCEPTION;
      $this->eventHandler_->handlerError($handler_ctx, 'ping', $ex);
      $result = new \TApplicationException($ex->getMessage()."\n".$ex->getTraceAsString());
    }
    $this->eventHandler_->preWrite($handler_ctx, 'ping', $result);
    if ($output is \TBinaryProtocolAccelerated)
    {
      \thrift_protocol_write_binary($output, 'ping', $reply_type, $result, $seqid, $output->isStrictWrite());
    }
    else if ($output is \TCompactProtocolAccelerated)
    {
      \thrift_protocol_write_compact2($output, 'ping', $reply_type, $result, $seqid, false, \TCompactProtocolBase::VERSION);
    }
    else
    {
      $output->writeMessageBegin("ping", $reply_type, $seqid);
      $result->write($output);
      $output->writeMessageEnd();
      $output->getTransport()->flush();
    }
    $this->eventHandler_->postWrite($handler_ctx, 'ping', $result);
  }
  protected function process_pong(int $seqid, \TProtocol $input, \TProtocol $output): void {
    $handler_ctx = $this->eventHandler_->getHandlerContext('pong');
    $reply_type = \TMessageType::REPLY;

    $this->eventHandler_->preRead($handler_ctx, 'pong', dict[]);

    if ($input is \TBinaryProtocolAccelerated) {
      $args = \thrift_protocol_read_binary_struct($input, 'MyServicePrioParent_pong_args');
    } else if ($input is \TCompactProtocolAccelerated) {
      $args = \thrift_protocol_read_compact_struct($input, 'MyServicePrioParent_pong_args');
    } else {
      $args = MyServicePrioParent_pong_args::withDefaultValues();
      $args->read($input);
    }
    $input->readMessageEnd();
    $this->eventHandler_->postRead($handler_ctx, 'pong', $args);
    $result = MyServicePrioParent_pong_result::withDefaultValues();
    try {
      $this->eventHandler_->preExec($handler_ctx, 'MyServicePrioParent', 'pong', $args);
      $this->handler->pong();
      $this->eventHandler_->postExec($handler_ctx, 'pong', $result);
    } catch (\Exception $ex) {
      $reply_type = \TMessageType::EXCEPTION;
      $this->eventHandler_->handlerError($handler_ctx, 'pong', $ex);
      $result = new \TApplicationException($ex->getMessage()."\n".$ex->getTraceAsString());
    }
    $this->eventHandler_->preWrite($handler_ctx, 'pong', $result);
    if ($output is \TBinaryProtocolAccelerated)
    {
      \thrift_protocol_write_binary($output, 'pong', $reply_type, $result, $seqid, $output->isStrictWrite());
    }
    else if ($output is \TCompactProtocolAccelerated)
    {
      \thrift_protocol_write_compact2($output, 'pong', $reply_type, $result, $seqid, false, \TCompactProtocolBase::VERSION);
    }
    else
    {
      $output->writeMessageBegin("pong", $reply_type, $seqid);
      $result->write($output);
      $output->writeMessageEnd();
      $output->getTransport()->flush();
    }
    $this->eventHandler_->postWrite($handler_ctx, 'pong', $result);
  }
  protected function process_getThriftServiceMetadata(int $seqid, \TProtocol $input, \TProtocol $output): void {
    $reply_type = \TMessageType::REPLY;

    if ($input is \TBinaryProtocolAccelerated) {
      $args = \thrift_protocol_read_binary_struct($input, '\tmeta_ThriftMetadataService_getThriftServiceMetadata_args');
    } else if ($input is \TCompactProtocolAccelerated) {
      $args = \thrift_protocol_read_compact_struct($input, '\tmeta_ThriftMetadataService_getThriftServiceMetadata_args');
    } else {
      $args = \tmeta_ThriftMetadataService_getThriftServiceMetadata_args::withDefaultValues();
      $args->read($input);
    }
    $input->readMessageEnd();
    $result = \tmeta_ThriftMetadataService_getThriftServiceMetadata_result::withDefaultValues();
    try {
      $result->success = MyServicePrioParentStaticMetadata::getServiceMetadataResponse();
    } catch (\Exception $ex) {
      $reply_type = \TMessageType::EXCEPTION;
      $result = new \TApplicationException($ex->getMessage()."\n".$ex->getTraceAsString());
    }
    if ($output is \TBinaryProtocolAccelerated)
    {
      \thrift_protocol_write_binary($output, 'getThriftServiceMetadata', $reply_type, $result, $seqid, $output->isStrictWrite());
    }
    else if ($output is \TCompactProtocolAccelerated)
    {
      \thrift_protocol_write_compact2($output, 'getThriftServiceMetadata', $reply_type, $result, $seqid, false, \TCompactProtocolBase::VERSION);
    }
    else
    {
      $output->writeMessageBegin("getThriftServiceMetadata", $reply_type, $seqid);
      $result->write($output);
      $output->writeMessageEnd();
      $output->getTransport()->flush();
    }
  }
}
class MyServicePrioParentSyncProcessor extends MyServicePrioParentSyncProcessorBase {
  const type TThriftIf = MyServicePrioParentIf;
}
// For backwards compatibility
class MyServicePrioParentProcessor extends MyServicePrioParentSyncProcessor {}

// HELPER FUNCTIONS AND STRUCTURES

class MyServicePrioParent_ping_args implements \IThriftSyncStruct, \IThriftStructMetadata, \IThriftShapishSyncStruct {
  use \ThriftSerializationTrait;

  const dict<int, this::TFieldSpec> SPEC = dict[
  ];
  const dict<string, int> FIELDMAP = dict[
  ];

  const type TConstructorShape = shape(
  );

  const type TShape = shape(
    ...
  );
  const int STRUCTURAL_ID = 957977401221134810;

  public function __construct()[] {
  }

  public static function withDefaultValues()[]: this {
    return new static();
  }

  public static function fromShape(self::TConstructorShape $shape)[]: this {
    return new static(
    );
  }

  public function getName()[]: string {
    return 'MyServicePrioParent_ping_args';
  }

  public function clearTerseFields()[write_props]: void {
  }

  public static function getStructMetadata()[]: \tmeta_ThriftStruct {
    return tmeta_ThriftStruct::fromShape(
      shape(
        "name" => "module.ping_args",
        "is_union" => false,
      )
    );
  }

  public static function getAllStructuredAnnotations()[write_props]: \TStructAnnotations {
    return shape(
      'struct' => dict[],
      'fields' => dict[
      ],
    );
  }

  public static function __fromShape(self::TShape $shape)[]: this {
    return new static(
    );
  }

  public function __toShape()[]: self::TShape {
    return shape(
    );
  }
  public function getInstanceKey()[write_props]: string {
    return \TCompactSerializer::serialize($this);
  }

  public function readFromJson(string $jsonText): void {
    $parsed = json_decode($jsonText, true);

    if ($parsed === null || !($parsed is KeyedContainer<_, _>)) {
      throw new \TProtocolException("Cannot parse the given json string.");
    }

  }

}

class MyServicePrioParent_ping_result extends \ThriftSyncStructWithoutResult implements \IThriftStructMetadata {
  use \ThriftSerializationTrait;

  const dict<int, this::TFieldSpec> SPEC = dict[
  ];
  const dict<string, int> FIELDMAP = dict[
  ];

  const type TConstructorShape = shape(
  );

  const int STRUCTURAL_ID = 957977401221134810;

  public function __construct()[] {
  }

  public static function withDefaultValues()[]: this {
    return new static();
  }

  public static function fromShape(self::TConstructorShape $shape)[]: this {
    return new static(
    );
  }

  public function getName()[]: string {
    return 'MyServicePrioParent_ping_result';
  }

  public function clearTerseFields()[write_props]: void {
  }

  public static function getStructMetadata()[]: \tmeta_ThriftStruct {
    return tmeta_ThriftStruct::fromShape(
      shape(
        "name" => "module.MyServicePrioParent_ping_result",
        "is_union" => false,
      )
    );
  }

  public static function getAllStructuredAnnotations()[write_props]: \TStructAnnotations {
    return shape(
      'struct' => dict[],
      'fields' => dict[
      ],
    );
  }

  public function getInstanceKey()[write_props]: string {
    return \TCompactSerializer::serialize($this);
  }

  public function readFromJson(string $jsonText): void {
    $parsed = json_decode($jsonText, true);

    if ($parsed === null || !($parsed is KeyedContainer<_, _>)) {
      throw new \TProtocolException("Cannot parse the given json string.");
    }

  }

}

class MyServicePrioParent_pong_args implements \IThriftSyncStruct, \IThriftStructMetadata, \IThriftShapishSyncStruct {
  use \ThriftSerializationTrait;

  const dict<int, this::TFieldSpec> SPEC = dict[
  ];
  const dict<string, int> FIELDMAP = dict[
  ];

  const type TConstructorShape = shape(
  );

  const type TShape = shape(
    ...
  );
  const int STRUCTURAL_ID = 957977401221134810;

  public function __construct()[] {
  }

  public static function withDefaultValues()[]: this {
    return new static();
  }

  public static function fromShape(self::TConstructorShape $shape)[]: this {
    return new static(
    );
  }

  public function getName()[]: string {
    return 'MyServicePrioParent_pong_args';
  }

  public function clearTerseFields()[write_props]: void {
  }

  public static function getStructMetadata()[]: \tmeta_ThriftStruct {
    return tmeta_ThriftStruct::fromShape(
      shape(
        "name" => "module.pong_args",
        "is_union" => false,
      )
    );
  }

  public static function getAllStructuredAnnotations()[write_props]: \TStructAnnotations {
    return shape(
      'struct' => dict[],
      'fields' => dict[
      ],
    );
  }

  public static function __fromShape(self::TShape $shape)[]: this {
    return new static(
    );
  }

  public function __toShape()[]: self::TShape {
    return shape(
    );
  }
  public function getInstanceKey()[write_props]: string {
    return \TCompactSerializer::serialize($this);
  }

  public function readFromJson(string $jsonText): void {
    $parsed = json_decode($jsonText, true);

    if ($parsed === null || !($parsed is KeyedContainer<_, _>)) {
      throw new \TProtocolException("Cannot parse the given json string.");
    }

  }

}

class MyServicePrioParent_pong_result extends \ThriftSyncStructWithoutResult implements \IThriftStructMetadata {
  use \ThriftSerializationTrait;

  const dict<int, this::TFieldSpec> SPEC = dict[
  ];
  const dict<string, int> FIELDMAP = dict[
  ];

  const type TConstructorShape = shape(
  );

  const int STRUCTURAL_ID = 957977401221134810;

  public function __construct()[] {
  }

  public static function withDefaultValues()[]: this {
    return new static();
  }

  public static function fromShape(self::TConstructorShape $shape)[]: this {
    return new static(
    );
  }

  public function getName()[]: string {
    return 'MyServicePrioParent_pong_result';
  }

  public function clearTerseFields()[write_props]: void {
  }

  public static function getStructMetadata()[]: \tmeta_ThriftStruct {
    return tmeta_ThriftStruct::fromShape(
      shape(
        "name" => "module.MyServicePrioParent_pong_result",
        "is_union" => false,
      )
    );
  }

  public static function getAllStructuredAnnotations()[write_props]: \TStructAnnotations {
    return shape(
      'struct' => dict[],
      'fields' => dict[
      ],
    );
  }

  public function getInstanceKey()[write_props]: string {
    return \TCompactSerializer::serialize($this);
  }

  public function readFromJson(string $jsonText): void {
    $parsed = json_decode($jsonText, true);

    if ($parsed === null || !($parsed is KeyedContainer<_, _>)) {
      throw new \TProtocolException("Cannot parse the given json string.");
    }

  }

}

class MyServicePrioParentStaticMetadata implements \IThriftServiceStaticMetadata {
  public static function getServiceMetadata()[]: \tmeta_ThriftService {
    return tmeta_ThriftService::fromShape(
      shape(
        "name" => "module.MyServicePrioParent",
        "functions" => vec[
          tmeta_ThriftFunction::fromShape(
            shape(
              "name" => "ping",
              "return_type" => tmeta_ThriftType::fromShape(
                shape(
                  "t_primitive" => tmeta_ThriftPrimitiveType::THRIFT_VOID_TYPE,
                )
              ),
            )
          ),
          tmeta_ThriftFunction::fromShape(
            shape(
              "name" => "pong",
              "return_type" => tmeta_ThriftType::fromShape(
                shape(
                  "t_primitive" => tmeta_ThriftPrimitiveType::THRIFT_VOID_TYPE,
                )
              ),
            )
          ),
        ],
      )
    );
  }

  public static function getServiceMetadataResponse()[]: \tmeta_ThriftServiceMetadataResponse {
    return \tmeta_ThriftServiceMetadataResponse::fromShape(
      shape(
        'context' => \tmeta_ThriftServiceContext::fromShape(
          shape(
            'service_info' => self::getServiceMetadata(),
            'module' => \tmeta_ThriftModuleContext::fromShape(
              shape(
                'name' => 'module',
              )
            ),
          )
        ),
        'metadata' => \tmeta_ThriftMetadata::fromShape(
          shape(
            'enums' => dict[
            ],
            'structs' => dict[
            ],
            'exceptions' => dict[
            ],
            'services' => dict[
            ],
          )
        ),
      )
    );
  }

  public static function getAllStructuredAnnotations()[write_props]: \TServiceAnnotations {
    return shape(
      'service' => dict[],
      'functions' => dict[
      ],
    );
  }
}

