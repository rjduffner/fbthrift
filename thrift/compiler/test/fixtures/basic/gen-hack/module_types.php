<?hh // strict
/**
 * Autogenerated by Thrift
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */

/**
 * Original thrift enum:-
 * MyEnum
 */
enum MyEnum: int {
  MyValue1 = 0;
  MyValue2 = 1;
}

class MyEnum_TEnumStaticMetadata implements \IThriftEnumStaticMetadata {
  public static function getAllStructuredAnnotations(): \TEnumAnnotations {
    return shape(
      'enum' => dict[],
      'constants' => dict[
      ],
    );
  }
}

/**
 * Original thrift struct:-
 * MyStruct
 */
class MyStruct implements \IThriftStruct, \IThriftShapishStruct {
  use \ThriftSerializationTrait;

  const dict<int, this::TFieldSpec> SPEC = dict[
    1 => shape(
      'var' => 'MyIntField',
      'type' => \TType::I64,
    ),
    2 => shape(
      'var' => 'MyStringField',
      'type' => \TType::STRING,
    ),
    3 => shape(
      'var' => 'MyDataField',
      'type' => \TType::STRUCT,
      'class' => MyDataItem::class,
    ),
    4 => shape(
      'var' => 'myEnum',
      'type' => \TType::I32,
      'enum' => MyEnum::class,
    ),
    5 => shape(
      'var' => 'oneway',
      'type' => \TType::BOOL,
    ),
    6 => shape(
      'var' => 'readonly',
      'type' => \TType::BOOL,
    ),
    7 => shape(
      'var' => 'idempotent',
      'type' => \TType::BOOL,
    ),
  ];
  const dict<string, int> FIELDMAP = dict[
    'MyIntField' => 1,
    'MyStringField' => 2,
    'MyDataField' => 3,
    'myEnum' => 4,
    'oneway' => 5,
    'readonly' => 6,
    'idempotent' => 7,
  ];

  const type TConstructorShape = shape(
    ?'MyIntField' => ?int,
    ?'MyStringField' => ?string,
    ?'MyDataField' => ?MyDataItem,
    ?'myEnum' => ?MyEnum,
    ?'oneway' => ?bool,
    ?'readonly' => ?bool,
    ?'idempotent' => ?bool,
  );

  const type TShape = shape(
    'MyIntField' => int,
    'MyStringField' => string,
    ?'MyDataField' => ?MyDataItem::TShape,
    ?'myEnum' => ?MyEnum,
    'oneway' => bool,
    'readonly' => bool,
    'idempotent' => bool,
    ...
  );
  const int STRUCTURAL_ID = 8914171512789040840;
  /**
   * Original thrift field:-
   * 1: i64 MyIntField
   */
  public int $MyIntField;
  /**
   * Original thrift field:-
   * 2: string MyStringField
   */
  public string $MyStringField;
  /**
   * Original thrift field:-
   * 3: struct module.MyDataItem MyDataField
   */
  public ?MyDataItem $MyDataField;
  /**
   * Original thrift field:-
   * 4: enum module.MyEnum myEnum
   */
  public ?MyEnum $myEnum;
  /**
   * Original thrift field:-
   * 5: bool oneway
   */
  public bool $oneway;
  /**
   * Original thrift field:-
   * 6: bool readonly
   */
  public bool $readonly;
  /**
   * Original thrift field:-
   * 7: bool idempotent
   */
  public bool $idempotent;

  public function __construct(?int $MyIntField = null, ?string $MyStringField = null, ?MyDataItem $MyDataField = null, ?MyEnum $myEnum = null, ?bool $oneway = null, ?bool $readonly = null, ?bool $idempotent = null  )[] {
    $this->MyIntField = $MyIntField ?? 0;
    $this->MyStringField = $MyStringField ?? '';
    $this->MyDataField = $MyDataField;
    $this->myEnum = $myEnum;
    $this->oneway = $oneway ?? false;
    $this->readonly = $readonly ?? false;
    $this->idempotent = $idempotent ?? false;
  }

  public static function withDefaultValues()[]: this {
    return new static();
  }

  public static function fromShape(self::TConstructorShape $shape)[]: this {
    return new static(
      Shapes::idx($shape, 'MyIntField'),
      Shapes::idx($shape, 'MyStringField'),
      Shapes::idx($shape, 'MyDataField'),
      Shapes::idx($shape, 'myEnum'),
      Shapes::idx($shape, 'oneway'),
      Shapes::idx($shape, 'readonly'),
      Shapes::idx($shape, 'idempotent'),
    );
  }

  public function getName(): string {
    return 'MyStruct';
  }

  public static function getAllStructuredAnnotations(): \TStructAnnotations {
    return shape(
      'struct' => dict[],
      'fields' => dict[
      ],
    );
  }

  public static function __fromShape(self::TShape $shape)[]: this {
    return new static(
      $shape['MyIntField'],
      $shape['MyStringField'],
      Shapes::idx($shape, 'MyDataField') === null ? null : (MyDataItem::__fromShape($shape['MyDataField'])),
      Shapes::idx($shape, 'myEnum') === null ? null : ($shape['myEnum']),
      $shape['oneway'],
      $shape['readonly'],
      $shape['idempotent'],
    );
  }

  public function __toShape()[]: self::TShape {
    return shape(
      'MyIntField' => $this->MyIntField,
      'MyStringField' => $this->MyStringField,
      'MyDataField' => $this->MyDataField?->__toShape(),
      'myEnum' => $this->myEnum,
      'oneway' => $this->oneway,
      'readonly' => $this->readonly,
      'idempotent' => $this->idempotent,
    );
  }
  public function readFromJson(string $jsonText): void {
    $parsed = json_decode($jsonText, true);

    if ($parsed === null || !($parsed is KeyedContainer<_, _>)) {
      throw new \TProtocolException("Cannot parse the given json string.");
    }

    if (idx($parsed, 'MyIntField') !== null) {
      $this->MyIntField = /* HH_FIXME[4110] */ $parsed['MyIntField'];
    }    
    if (idx($parsed, 'MyStringField') !== null) {
      $this->MyStringField = /* HH_FIXME[4110] */ $parsed['MyStringField'];
    }    
    if (idx($parsed, 'MyDataField') !== null) {
      $_tmp0 = json_encode(/* HH_FIXME[4110] */ $parsed['MyDataField']);
      $_tmp1 = MyDataItem::withDefaultValues();
      $_tmp1->readFromJson($_tmp0);
      $this->MyDataField = $_tmp1;
    }    
    if (idx($parsed, 'myEnum') !== null) {
      $this->myEnum = MyEnum::coerce(/* HH_FIXME[4110] */ $parsed['myEnum']);    }    
    if (idx($parsed, 'oneway') !== null) {
      $this->oneway = /* HH_FIXME[4110] */ $parsed['oneway'];
    }    
    if (idx($parsed, 'readonly') !== null) {
      $this->readonly = /* HH_FIXME[4110] */ $parsed['readonly'];
    }    
    if (idx($parsed, 'idempotent') !== null) {
      $this->idempotent = /* HH_FIXME[4110] */ $parsed['idempotent'];
    }    
  }

}

/**
 * Original thrift struct:-
 * MyDataItem
 */
class MyDataItem implements \IThriftStruct, \IThriftShapishStruct {
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

  public function __construct(  )[] {
  }

  public static function withDefaultValues()[]: this {
    return new static();
  }

  public static function fromShape(self::TConstructorShape $shape)[]: this {
    return new static(
    );
  }

  public function getName(): string {
    return 'MyDataItem';
  }

  public static function getAllStructuredAnnotations(): \TStructAnnotations {
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
  public function readFromJson(string $jsonText): void {
    $parsed = json_decode($jsonText, true);

    if ($parsed === null || !($parsed is KeyedContainer<_, _>)) {
      throw new \TProtocolException("Cannot parse the given json string.");
    }

  }

}

enum MyUnionEnum: int {
  _EMPTY_ = 0;
  myEnum = 1;
  myStruct = 2;
  myDataItem = 3;
}

/**
 * Original thrift struct:-
 * MyUnion
 */
class MyUnion implements \IThriftStruct, \IThriftUnion<MyUnionEnum>, \IThriftShapishStruct {
  use \ThriftUnionSerializationTrait;

  const dict<int, this::TFieldSpec> SPEC = dict[
    1 => shape(
      'var' => 'myEnum',
      'union' => true,
      'type' => \TType::I32,
      'enum' => MyEnum::class,
    ),
    2 => shape(
      'var' => 'myStruct',
      'union' => true,
      'type' => \TType::STRUCT,
      'class' => MyStruct::class,
    ),
    3 => shape(
      'var' => 'myDataItem',
      'union' => true,
      'type' => \TType::STRUCT,
      'class' => MyDataItem::class,
    ),
  ];
  const dict<string, int> FIELDMAP = dict[
    'myEnum' => 1,
    'myStruct' => 2,
    'myDataItem' => 3,
  ];

  const type TConstructorShape = shape(
    ?'myEnum' => ?MyEnum,
    ?'myStruct' => ?MyStruct,
    ?'myDataItem' => ?MyDataItem,
  );

  const type TShape = shape(
    ?'myEnum' => ?MyEnum,
    ?'myStruct' => ?MyStruct::TShape,
    ?'myDataItem' => ?MyDataItem::TShape,
    ...
  );
  const int STRUCTURAL_ID = 3298716738803257608;
  /**
   * Original thrift field:-
   * 1: enum module.MyEnum myEnum
   */
  public ?MyEnum $myEnum;
  /**
   * Original thrift field:-
   * 2: struct module.MyStruct myStruct
   */
  public ?MyStruct $myStruct;
  /**
   * Original thrift field:-
   * 3: struct module.MyDataItem myDataItem
   */
  public ?MyDataItem $myDataItem;
  protected MyUnionEnum $_type = MyUnionEnum::_EMPTY_;

  public function __construct(?MyEnum $myEnum = null, ?MyStruct $myStruct = null, ?MyDataItem $myDataItem = null  )[] {
    $this->_type = MyUnionEnum::_EMPTY_;
    if ($myEnum !== null) {
      $this->myEnum = $myEnum;
      $this->_type = MyUnionEnum::myEnum;
    }
    if ($myStruct !== null) {
      $this->myStruct = $myStruct;
      $this->_type = MyUnionEnum::myStruct;
    }
    if ($myDataItem !== null) {
      $this->myDataItem = $myDataItem;
      $this->_type = MyUnionEnum::myDataItem;
    }
  }

  public static function withDefaultValues()[]: this {
    return new static();
  }

  public static function fromShape(self::TConstructorShape $shape)[]: this {
    return new static(
      Shapes::idx($shape, 'myEnum'),
      Shapes::idx($shape, 'myStruct'),
      Shapes::idx($shape, 'myDataItem'),
    );
  }

  public function getName(): string {
    return 'MyUnion';
  }

  public function getType(): MyUnionEnum {
    return $this->_type;
  }

  public function reset(): void {
    switch ($this->_type) {
      case MyUnionEnum::myEnum:
        $this->myEnum = null;
        break;
      case MyUnionEnum::myStruct:
        $this->myStruct = null;
        break;
      case MyUnionEnum::myDataItem:
        $this->myDataItem = null;
        break;
      case MyUnionEnum::_EMPTY_:
        break;
    }
    $this->_type = MyUnionEnum::_EMPTY_;
}

  public function set_myEnum(MyEnum $myEnum): this {
    $this->reset();
    $this->_type = MyUnionEnum::myEnum;
    $this->myEnum = $myEnum;
    return $this;
  }

  public function get_myEnum(): MyEnum {
    invariant(
      $this->_type === MyUnionEnum::myEnum,
      'get_myEnum called on an instance of MyUnion whose current type is %s',
      (string)$this->_type,
    );
    return $this->myEnum as nonnull;
  }

  public function set_myStruct(MyStruct $myStruct): this {
    $this->reset();
    $this->_type = MyUnionEnum::myStruct;
    $this->myStruct = $myStruct;
    return $this;
  }

  public function get_myStruct(): MyStruct {
    invariant(
      $this->_type === MyUnionEnum::myStruct,
      'get_myStruct called on an instance of MyUnion whose current type is %s',
      (string)$this->_type,
    );
    return $this->myStruct as nonnull;
  }

  public function set_myDataItem(MyDataItem $myDataItem): this {
    $this->reset();
    $this->_type = MyUnionEnum::myDataItem;
    $this->myDataItem = $myDataItem;
    return $this;
  }

  public function get_myDataItem(): MyDataItem {
    invariant(
      $this->_type === MyUnionEnum::myDataItem,
      'get_myDataItem called on an instance of MyUnion whose current type is %s',
      (string)$this->_type,
    );
    return $this->myDataItem as nonnull;
  }

  public static function getAllStructuredAnnotations(): \TStructAnnotations {
    return shape(
      'struct' => dict[],
      'fields' => dict[
      ],
    );
  }

  public static function __fromShape(self::TShape $shape)[]: this {
    return new static(
      Shapes::idx($shape, 'myEnum') === null ? null : ($shape['myEnum']),
      Shapes::idx($shape, 'myStruct') === null ? null : (MyStruct::__fromShape($shape['myStruct'])),
      Shapes::idx($shape, 'myDataItem') === null ? null : (MyDataItem::__fromShape($shape['myDataItem'])),
    );
  }

  public function __toShape()[]: self::TShape {
    return shape(
      'myEnum' => $this->myEnum,
      'myStruct' => $this->myStruct?->__toShape(),
      'myDataItem' => $this->myDataItem?->__toShape(),
    );
  }
  public function readFromJson(string $jsonText): void {
    $this->_type = MyUnionEnum::_EMPTY_;
    $parsed = json_decode($jsonText, true);

    if ($parsed === null || !($parsed is KeyedContainer<_, _>)) {
      throw new \TProtocolException("Cannot parse the given json string.");
    }

    if (idx($parsed, 'myEnum') !== null) {
      $this->myEnum = MyEnum::coerce(/* HH_FIXME[4110] */ $parsed['myEnum']);      $this->_type = MyUnionEnum::myEnum;
    }    
    if (idx($parsed, 'myStruct') !== null) {
      $_tmp0 = json_encode(/* HH_FIXME[4110] */ $parsed['myStruct']);
      $_tmp1 = MyStruct::withDefaultValues();
      $_tmp1->readFromJson($_tmp0);
      $this->myStruct = $_tmp1;
      $this->_type = MyUnionEnum::myStruct;
    }    
    if (idx($parsed, 'myDataItem') !== null) {
      $_tmp2 = json_encode(/* HH_FIXME[4110] */ $parsed['myDataItem']);
      $_tmp3 = MyDataItem::withDefaultValues();
      $_tmp3->readFromJson($_tmp2);
      $this->myDataItem = $_tmp3;
      $this->_type = MyUnionEnum::myDataItem;
    }    
  }

}

