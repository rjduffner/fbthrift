<?hh
/**
 * Autogenerated by Thrift
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */

/**
 * Original thrift service:-
 * SomeService
 */
interface SomeServiceAsyncIf extends \IThriftAsyncIf {
  /**
   * Original thrift definition:-
   * include.SomeMap
   *   bounce_map(1: include.SomeMap m);
   */
  public function bounce_map(Map<int, string> $m): Awaitable<Map<int, string>>;

  /**
   * Original thrift definition:-
   * map<TBinary, i64>
   *   binary_keyed_map(1: list<i64> r);
   */
  public function binary_keyed_map(KeyedContainer<int, int> $r): Awaitable<Map<string, int>>;
}

/**
 * Original thrift service:-
 * SomeService
 */
interface SomeServiceIf extends \IThriftSyncIf {
  /**
   * Original thrift definition:-
   * include.SomeMap
   *   bounce_map(1: include.SomeMap m);
   */
  public function bounce_map(Map<int, string> $m): Map<int, string>;

  /**
   * Original thrift definition:-
   * map<TBinary, i64>
   *   binary_keyed_map(1: list<i64> r);
   */
  public function binary_keyed_map(KeyedContainer<int, int> $r): Map<string, int>;
}

/**
 * Original thrift service:-
 * SomeService
 */
interface SomeServiceAsyncClientIf extends SomeServiceAsyncIf {
}

/**
 * Original thrift service:-
 * SomeService
 */
interface SomeServiceClientIf extends \IThriftSyncIf {
  /**
   * Original thrift definition:-
   * include.SomeMap
   *   bounce_map(1: include.SomeMap m);
   */
  public function bounce_map(Map<int, string> $m): Awaitable<Map<int, string>>;

  /**
   * Original thrift definition:-
   * map<TBinary, i64>
   *   binary_keyed_map(1: list<i64> r);
   */
  public function binary_keyed_map(KeyedContainer<int, int> $r): Awaitable<Map<string, int>>;
}

/**
 * Original thrift service:-
 * SomeService
 */
trait SomeServiceClientBase {
  require extends \ThriftClientBase;

}

class SomeServiceAsyncClient extends \ThriftClientBase implements SomeServiceAsyncClientIf {
  use SomeServiceClientBase;

  /**
   * Original thrift definition:-
   * include.SomeMap
   *   bounce_map(1: include.SomeMap m);
   */
  public async function bounce_map(Map<int, string> $m): Awaitable<Map<int, string>> {
    $hh_frame_metadata = $this->getHHFrameMetadata();
    if ($hh_frame_metadata !== null) {
      \HH\set_frame_metadata($hh_frame_metadata);
    }
    $rpc_options = $this->getAndResetOptions() ?? \ThriftClientBase::defaultOptions();
    $args = SomeService_bounce_map_args::fromShape(shape(
      'm' => $m,
    ));
    await $this->asyncHandler_->genBefore("SomeService", "bounce_map", $args);
    $currentseqid = $this->sendImplHelper($args, "bounce_map", false);
    return await $this->genAwaitResponse(SomeService_bounce_map_result::class, "bounce_map", false, $currentseqid, $rpc_options);
  }

  /**
   * Original thrift definition:-
   * map<TBinary, i64>
   *   binary_keyed_map(1: list<i64> r);
   */
  public async function binary_keyed_map(KeyedContainer<int, int> $r): Awaitable<Map<string, int>> {
    $hh_frame_metadata = $this->getHHFrameMetadata();
    if ($hh_frame_metadata !== null) {
      \HH\set_frame_metadata($hh_frame_metadata);
    }
    $rpc_options = $this->getAndResetOptions() ?? \ThriftClientBase::defaultOptions();
    $args = SomeService_binary_keyed_map_args::fromShape(shape(
      'r' => new Vector($r),
    ));
    await $this->asyncHandler_->genBefore("SomeService", "binary_keyed_map", $args);
    $currentseqid = $this->sendImplHelper($args, "binary_keyed_map", false);
    return await $this->genAwaitResponse(SomeService_binary_keyed_map_result::class, "binary_keyed_map", false, $currentseqid, $rpc_options);
  }

}

class SomeServiceClient extends \ThriftClientBase implements SomeServiceClientIf {
  use SomeServiceClientBase;

  /**
   * Original thrift definition:-
   * include.SomeMap
   *   bounce_map(1: include.SomeMap m);
   */
  public async function bounce_map(Map<int, string> $m): Awaitable<Map<int, string>> {
    $hh_frame_metadata = $this->getHHFrameMetadata();
    if ($hh_frame_metadata !== null) {
      \HH\set_frame_metadata($hh_frame_metadata);
    }
    $rpc_options = $this->getAndResetOptions() ?? \ThriftClientBase::defaultOptions();
    $args = SomeService_bounce_map_args::fromShape(shape(
      'm' => $m,
    ));
    await $this->asyncHandler_->genBefore("SomeService", "bounce_map", $args);
    $currentseqid = $this->sendImplHelper($args, "bounce_map", false);
    return await $this->genAwaitResponse(SomeService_bounce_map_result::class, "bounce_map", false, $currentseqid, $rpc_options);
  }

  /**
   * Original thrift definition:-
   * map<TBinary, i64>
   *   binary_keyed_map(1: list<i64> r);
   */
  public async function binary_keyed_map(KeyedContainer<int, int> $r): Awaitable<Map<string, int>> {
    $hh_frame_metadata = $this->getHHFrameMetadata();
    if ($hh_frame_metadata !== null) {
      \HH\set_frame_metadata($hh_frame_metadata);
    }
    $rpc_options = $this->getAndResetOptions() ?? \ThriftClientBase::defaultOptions();
    $args = SomeService_binary_keyed_map_args::fromShape(shape(
      'r' => new Vector($r),
    ));
    await $this->asyncHandler_->genBefore("SomeService", "binary_keyed_map", $args);
    $currentseqid = $this->sendImplHelper($args, "binary_keyed_map", false);
    return await $this->genAwaitResponse(SomeService_binary_keyed_map_result::class, "binary_keyed_map", false, $currentseqid, $rpc_options);
  }

  /* send and recv functions */
  public function send_bounce_map(Map<int, string> $m): int {
    $args = SomeService_bounce_map_args::fromShape(shape(
      'm' => $m,
    ));
    return $this->sendImplHelper($args, "bounce_map", false);
  }
  public function recv_bounce_map(?int $expectedsequenceid = null): Map<int, string> {
    return $this->recvImplHelper(SomeService_bounce_map_result::class, "bounce_map", false, $expectedsequenceid);
  }
  public function send_binary_keyed_map(KeyedContainer<int, int> $r): int {
    $args = SomeService_binary_keyed_map_args::fromShape(shape(
      'r' => new Vector($r),
    ));
    return $this->sendImplHelper($args, "binary_keyed_map", false);
  }
  public function recv_binary_keyed_map(?int $expectedsequenceid = null): Map<string, int> {
    return $this->recvImplHelper(SomeService_binary_keyed_map_result::class, "binary_keyed_map", false, $expectedsequenceid);
  }
}

// HELPER FUNCTIONS AND STRUCTURES

class SomeService_bounce_map_args implements \IThriftSyncStruct, \IThriftStructMetadata {
  use \ThriftSerializationTrait;

  const dict<int, this::TFieldSpec> SPEC = dict[
    1 => shape(
      'var' => 'm',
      'type' => \TType::MAP,
      'ktype' => \TType::I32,
      'vtype' => \TType::STRING,
      'key' => shape(
        'type' => \TType::I32,
      ),
      'val' => shape(
        'type' => \TType::STRING,
      ),
      'format' => 'collection',
    ),
  ];
  const dict<string, int> FIELDMAP = dict[
    'm' => 1,
  ];

  const type TConstructorShape = shape(
    ?'m' => ?Map<int, string>,
  );

  const int STRUCTURAL_ID = 1590329293490505564;
  public Map<int, string> $m;

  public function __construct(?Map<int, string> $m = null)[] {
    $this->m = $m ?? Map {};
  }

  public static function withDefaultValues()[]: this {
    return new static();
  }

  public static function fromShape(self::TConstructorShape $shape)[]: this {
    return new static(
      Shapes::idx($shape, 'm'),
    );
  }

  public function getName()[]: string {
    return 'SomeService_bounce_map_args';
  }

  public function clearTerseFields()[write_props]: void {
  }

  public static function getStructMetadata()[]: \tmeta_ThriftStruct {
    return tmeta_ThriftStruct::fromShape(
      shape(
        "name" => "module.bounce_map_args",
        "fields" => vec[
          tmeta_ThriftField::fromShape(
            shape(
              "id" => 1,
              "type" => tmeta_ThriftType::fromShape(
                shape(
                  "t_typedef" => tmeta_ThriftTypedefType::fromShape(
                    shape(
                      "name" => "include.SomeMap",
                      "underlyingType" => tmeta_ThriftType::fromShape(
                        shape(
                          "t_map" => tmeta_ThriftMapType::fromShape(
                            shape(
                              "keyType" => tmeta_ThriftType::fromShape(
                                shape(
                                  "t_primitive" => tmeta_ThriftPrimitiveType::THRIFT_I32_TYPE,
                                )
                              ),
                              "valueType" => tmeta_ThriftType::fromShape(
                                shape(
                                  "t_primitive" => tmeta_ThriftPrimitiveType::THRIFT_STRING_TYPE,
                                )
                              ),
                            )
                          ),
                        )
                      ),
                    )
                  ),
                )
              ),
              "name" => "m",
            )
          ),
        ],
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

    if (idx($parsed, 'm') !== null) {
      $_json3 = HH\FIXME\UNSAFE_CAST<mixed, Map<int, string>>($parsed['m']);
      $_container4 = Map {};
      foreach($_json3 as $_key1 => $_value2) {
        $_value5 = '';
        $_value5 = $_value2;
        $_container4[$_key1] = $_value5;
      }
      $this->m = $_container4;
    }
  }

}

class SomeService_bounce_map_result extends \ThriftSyncStructWithResult implements \IThriftStructMetadata {
  use \ThriftSerializationTrait;

  const type TResult = Map<int, string>;

  const dict<int, this::TFieldSpec> SPEC = dict[
    0 => shape(
      'var' => 'success',
      'type' => \TType::MAP,
      'ktype' => \TType::I32,
      'vtype' => \TType::STRING,
      'key' => shape(
        'type' => \TType::I32,
      ),
      'val' => shape(
        'type' => \TType::STRING,
      ),
      'format' => 'collection',
    ),
  ];
  const dict<string, int> FIELDMAP = dict[
    'success' => 0,
  ];

  const type TConstructorShape = shape(
    ?'success' => ?this::TResult,
  );

  const int STRUCTURAL_ID = 390979496709511735;
  public ?this::TResult $success;

  public function __construct(?this::TResult $success = null)[] {
    $this->success = $success;
  }

  public static function withDefaultValues()[]: this {
    return new static();
  }

  public static function fromShape(self::TConstructorShape $shape)[]: this {
    return new static(
      Shapes::idx($shape, 'success'),
    );
  }

  public function getName()[]: string {
    return 'SomeService_bounce_map_result';
  }

  public function clearTerseFields()[write_props]: void {
  }

  public static function getStructMetadata()[]: \tmeta_ThriftStruct {
    return tmeta_ThriftStruct::fromShape(
      shape(
        "name" => "module.SomeService_bounce_map_result",
        "fields" => vec[
          tmeta_ThriftField::fromShape(
            shape(
              "id" => 0,
              "type" => tmeta_ThriftType::fromShape(
                shape(
                  "t_typedef" => tmeta_ThriftTypedefType::fromShape(
                    shape(
                      "name" => "include.SomeMap",
                      "underlyingType" => tmeta_ThriftType::fromShape(
                        shape(
                          "t_map" => tmeta_ThriftMapType::fromShape(
                            shape(
                              "keyType" => tmeta_ThriftType::fromShape(
                                shape(
                                  "t_primitive" => tmeta_ThriftPrimitiveType::THRIFT_I32_TYPE,
                                )
                              ),
                              "valueType" => tmeta_ThriftType::fromShape(
                                shape(
                                  "t_primitive" => tmeta_ThriftPrimitiveType::THRIFT_STRING_TYPE,
                                )
                              ),
                            )
                          ),
                        )
                      ),
                    )
                  ),
                )
              ),
              "name" => "success",
            )
          ),
        ],
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

    if (idx($parsed, 'success') !== null) {
      $_json3 = HH\FIXME\UNSAFE_CAST<mixed, Map<int, string>>($parsed['success']);
      $_container4 = Map {};
      foreach($_json3 as $_key1 => $_value2) {
        $_value5 = '';
        $_value5 = $_value2;
        $_container4[$_key1] = $_value5;
      }
      $this->success = $_container4;
    }
  }

}

class SomeService_binary_keyed_map_args implements \IThriftSyncStruct, \IThriftStructMetadata {
  use \ThriftSerializationTrait;

  const dict<int, this::TFieldSpec> SPEC = dict[
    1 => shape(
      'var' => 'r',
      'type' => \TType::LST,
      'etype' => \TType::I64,
      'elem' => shape(
        'type' => \TType::I64,
      ),
      'format' => 'collection',
    ),
  ];
  const dict<string, int> FIELDMAP = dict[
    'r' => 1,
  ];

  const type TConstructorShape = shape(
    ?'r' => ?Vector<int>,
  );

  const int STRUCTURAL_ID = 4817436577562933873;
  public Vector<int> $r;

  public function __construct(?Vector<int> $r = null)[] {
    $this->r = $r ?? Vector {};
  }

  public static function withDefaultValues()[]: this {
    return new static();
  }

  public static function fromShape(self::TConstructorShape $shape)[]: this {
    return new static(
      Shapes::idx($shape, 'r'),
    );
  }

  public function getName()[]: string {
    return 'SomeService_binary_keyed_map_args';
  }

  public function clearTerseFields()[write_props]: void {
  }

  public static function getStructMetadata()[]: \tmeta_ThriftStruct {
    return tmeta_ThriftStruct::fromShape(
      shape(
        "name" => "module.binary_keyed_map_args",
        "fields" => vec[
          tmeta_ThriftField::fromShape(
            shape(
              "id" => 1,
              "type" => tmeta_ThriftType::fromShape(
                shape(
                  "t_list" => tmeta_ThriftListType::fromShape(
                    shape(
                      "valueType" => tmeta_ThriftType::fromShape(
                        shape(
                          "t_primitive" => tmeta_ThriftPrimitiveType::THRIFT_I64_TYPE,
                        )
                      ),
                    )
                  ),
                )
              ),
              "name" => "r",
            )
          ),
        ],
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

    if (idx($parsed, 'r') !== null) {
      $_json3 = HH\FIXME\UNSAFE_CAST<mixed, Vector<int>>($parsed['r']);
      $_container4 = Vector {};
      foreach($_json3 as $_key1 => $_value2) {
        $_elem5 = 0;
        $_elem5 = $_value2;
        $_container4 []= $_elem5;
      }
      $this->r = $_container4;
    }
  }

}

class SomeService_binary_keyed_map_result extends \ThriftSyncStructWithResult implements \IThriftStructMetadata {
  use \ThriftSerializationTrait;

  const type TResult = Map<string, int>;

  const dict<int, this::TFieldSpec> SPEC = dict[
    0 => shape(
      'var' => 'success',
      'type' => \TType::MAP,
      'ktype' => \TType::STRING,
      'vtype' => \TType::I64,
      'key' => shape(
        'type' => \TType::STRING,
        'is_binary' => true,
      ),
      'val' => shape(
        'type' => \TType::I64,
      ),
      'format' => 'collection',
    ),
  ];
  const dict<string, int> FIELDMAP = dict[
    'success' => 0,
  ];

  const type TConstructorShape = shape(
    ?'success' => ?this::TResult,
  );

  const int STRUCTURAL_ID = 5594803499509360192;
  public ?this::TResult $success;

  public function __construct(?this::TResult $success = null)[] {
    $this->success = $success;
  }

  public static function withDefaultValues()[]: this {
    return new static();
  }

  public static function fromShape(self::TConstructorShape $shape)[]: this {
    return new static(
      Shapes::idx($shape, 'success'),
    );
  }

  public function getName()[]: string {
    return 'SomeService_binary_keyed_map_result';
  }

  public function clearTerseFields()[write_props]: void {
  }

  public static function getStructMetadata()[]: \tmeta_ThriftStruct {
    return tmeta_ThriftStruct::fromShape(
      shape(
        "name" => "module.SomeService_binary_keyed_map_result",
        "fields" => vec[
          tmeta_ThriftField::fromShape(
            shape(
              "id" => 0,
              "type" => tmeta_ThriftType::fromShape(
                shape(
                  "t_map" => tmeta_ThriftMapType::fromShape(
                    shape(
                      "keyType" => tmeta_ThriftType::fromShape(
                        shape(
                          "t_typedef" => tmeta_ThriftTypedefType::fromShape(
                            shape(
                              "name" => "module.TBinary",
                              "underlyingType" => tmeta_ThriftType::fromShape(
                                shape(
                                  "t_primitive" => tmeta_ThriftPrimitiveType::THRIFT_BINARY_TYPE,
                                )
                              ),
                            )
                          ),
                        )
                      ),
                      "valueType" => tmeta_ThriftType::fromShape(
                        shape(
                          "t_primitive" => tmeta_ThriftPrimitiveType::THRIFT_I64_TYPE,
                        )
                      ),
                    )
                  ),
                )
              ),
              "name" => "success",
            )
          ),
        ],
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

    if (idx($parsed, 'success') !== null) {
      $_json3 = HH\FIXME\UNSAFE_CAST<mixed, Map<string, int>>($parsed['success']);
      $_container4 = Map {};
      foreach($_json3 as $_key1 => $_value2) {
        $_value5 = 0;
        $_value5 = $_value2;
        $_container4[$_key1] = $_value5;
      }
      $this->success = $_container4;
    }
  }

}

class SomeServiceStaticMetadata implements \IThriftServiceStaticMetadata {
  public static function getServiceMetadata()[]: \tmeta_ThriftService {
    return tmeta_ThriftService::fromShape(
      shape(
        "name" => "module.SomeService",
        "functions" => vec[
          tmeta_ThriftFunction::fromShape(
            shape(
              "name" => "bounce_map",
              "return_type" => tmeta_ThriftType::fromShape(
                shape(
                  "t_typedef" => tmeta_ThriftTypedefType::fromShape(
                    shape(
                      "name" => "include.SomeMap",
                      "underlyingType" => tmeta_ThriftType::fromShape(
                        shape(
                          "t_map" => tmeta_ThriftMapType::fromShape(
                            shape(
                              "keyType" => tmeta_ThriftType::fromShape(
                                shape(
                                  "t_primitive" => tmeta_ThriftPrimitiveType::THRIFT_I32_TYPE,
                                )
                              ),
                              "valueType" => tmeta_ThriftType::fromShape(
                                shape(
                                  "t_primitive" => tmeta_ThriftPrimitiveType::THRIFT_STRING_TYPE,
                                )
                              ),
                            )
                          ),
                        )
                      ),
                    )
                  ),
                )
              ),
              "arguments" => vec[
                tmeta_ThriftField::fromShape(
                  shape(
                    "id" => 1,
                    "type" => tmeta_ThriftType::fromShape(
                      shape(
                        "t_typedef" => tmeta_ThriftTypedefType::fromShape(
                          shape(
                            "name" => "include.SomeMap",
                            "underlyingType" => tmeta_ThriftType::fromShape(
                              shape(
                                "t_map" => tmeta_ThriftMapType::fromShape(
                                  shape(
                                    "keyType" => tmeta_ThriftType::fromShape(
                                      shape(
                                        "t_primitive" => tmeta_ThriftPrimitiveType::THRIFT_I32_TYPE,
                                      )
                                    ),
                                    "valueType" => tmeta_ThriftType::fromShape(
                                      shape(
                                        "t_primitive" => tmeta_ThriftPrimitiveType::THRIFT_STRING_TYPE,
                                      )
                                    ),
                                  )
                                ),
                              )
                            ),
                          )
                        ),
                      )
                    ),
                    "name" => "m",
                  )
                ),
              ],
            )
          ),
          tmeta_ThriftFunction::fromShape(
            shape(
              "name" => "binary_keyed_map",
              "return_type" => tmeta_ThriftType::fromShape(
                shape(
                  "t_map" => tmeta_ThriftMapType::fromShape(
                    shape(
                      "keyType" => tmeta_ThriftType::fromShape(
                        shape(
                          "t_typedef" => tmeta_ThriftTypedefType::fromShape(
                            shape(
                              "name" => "module.TBinary",
                              "underlyingType" => tmeta_ThriftType::fromShape(
                                shape(
                                  "t_primitive" => tmeta_ThriftPrimitiveType::THRIFT_BINARY_TYPE,
                                )
                              ),
                            )
                          ),
                        )
                      ),
                      "valueType" => tmeta_ThriftType::fromShape(
                        shape(
                          "t_primitive" => tmeta_ThriftPrimitiveType::THRIFT_I64_TYPE,
                        )
                      ),
                    )
                  ),
                )
              ),
              "arguments" => vec[
                tmeta_ThriftField::fromShape(
                  shape(
                    "id" => 1,
                    "type" => tmeta_ThriftType::fromShape(
                      shape(
                        "t_list" => tmeta_ThriftListType::fromShape(
                          shape(
                            "valueType" => tmeta_ThriftType::fromShape(
                              shape(
                                "t_primitive" => tmeta_ThriftPrimitiveType::THRIFT_I64_TYPE,
                              )
                            ),
                          )
                        ),
                      )
                    ),
                    "name" => "r",
                  )
                ),
              ],
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

