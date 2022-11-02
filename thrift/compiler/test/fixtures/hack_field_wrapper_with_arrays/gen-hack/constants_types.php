<?hh
/**
 * Autogenerated by Thrift
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */

/**
 * Original thrift enum:-
 * Company
 */
enum Company: int {
  FACEBOOK = 0;
  WHATSAPP = 1;
  OCULUS = 2;
  INSTAGRAM = 3;
}

class Company_TEnumStaticMetadata implements \IThriftEnumStaticMetadata {
  public static function getEnumMetadata()[]: \tmeta_ThriftEnum {
    return tmeta_ThriftEnum::fromShape(
      shape(
        "name" => "constants.Company",
        "elements" => dict[
          0 => "FACEBOOK",
          1 => "WHATSAPP",
          2 => "OCULUS",
          3 => "INSTAGRAM",
        ],
      )
    );
  }

  public static function getAllStructuredAnnotations()[write_props]: \TEnumAnnotations {
    return shape(
      'enum' => dict[],
      'constants' => dict[
        'FACEBOOK' => dict[
          'AnnotationStruct' => AnnotationStruct::fromShape(
            shape(
            )
          ),
        ],
      ],
    );
  }
}

type MyCompany = Company;
/**
 * Original thrift struct:-
 * Internship
 */
class Internship implements \IThriftAsyncStruct, \IThriftStructMetadata, \IThriftShapishAsyncStruct {
  use \ThriftSerializationTrait;

  const dict<int, this::TFieldSpec> SPEC = dict[
    1 => shape(
      'var' => 'weeks',
      'type' => \TType::I32,
    ),
    2 => shape(
      'var' => 'title',
      'type' => \TType::STRING,
    ),
    3 => shape(
      'var' => 'employer',
      'type' => \TType::I32,
      'enum' => Company::class,
    ),
    4 => shape(
      'var' => 'compensation',
      'is_wrapped' => true,
      'type' => \TType::DOUBLE,
    ),
    5 => shape(
      'var' => 'school',
      'type' => \TType::STRING,
    ),
    6 => shape(
      'var' => 'intern_id',
      'is_type_wrapped' => true,
      'type' => \TType::I64,
    ),
  ];
  const dict<string, int> FIELDMAP = dict[
    'weeks' => 1,
    'title' => 2,
    'employer' => 3,
    'compensation' => 4,
    'school' => 5,
    'intern_id' => 6,
  ];

  const type TConstructorShape = shape(
    ?'weeks' => ?int,
    ?'title' => ?string,
    ?'employer' => ?Company,
    ?'compensation' => ?float,
    ?'school' => ?string,
    ?'intern_id' => ?\detail\i64WithWrapper,
  );

  const type TShape = shape(
    'weeks' => int,
    'title' => string,
    ?'employer' => ?Company,
    ?'compensation' => ?float,
    ?'school' => ?string,
    'intern_id' => \detail\i64WithWrapper,
  );
  const int STRUCTURAL_ID = 2043029874796299989;
  /**
   * Original thrift field:-
   * 1: i32 weeks
   */
  public int $weeks;
  /**
   * Original thrift field:-
   * 2: string title
   */
  public string $title;
  /**
   * Original thrift field:-
   * 3: enum constants.Company employer
   */
  public ?Company $employer;
  /**
   * Original thrift field:-
   * 4: double compensation
   */
  private ?\MyFieldWrapper<?float, Internship> $compensation;

  public function get_compensation()[]: \MyFieldWrapper<?float, Internship> {
    return $this->compensation as nonnull;
  }

  /**
   * Original thrift field:-
   * 5: string school
   */
  public ?string $school;
  /**
   * Original thrift field:-
   * 6: i64 intern_id
   */
  public i64WithWrapper $intern_id;

  public function __construct()[] {
    $this->weeks = 0;
    $this->title = '';
    $this->compensation = \MyFieldWrapper::fromThrift_DO_NOT_USE_THRIFT_INTERNAL<?float, Internship>(null, 4, $this);
    $this->intern_id = \MyTypeIntWrapper::fromThrift_DO_NOT_USE_THRIFT_INTERNAL<\detail\i64WithWrapper>(0);
  }

  public static function withDefaultValues()[]: this {
    return new static();
  }

  public static async function genFromShape(self::TConstructorShape $shape)[zoned_local]: Awaitable<this> {
    $obj = new static();
    $weeks = Shapes::idx($shape, 'weeks');
    if ($weeks !== null) {
      $obj->weeks = $weeks;
    }
    $title = Shapes::idx($shape, 'title');
    if ($title !== null) {
      $obj->title = $title;
    }
    $employer = Shapes::idx($shape, 'employer');
    if ($employer !== null) {
      $obj->employer = $employer;
    }
    $compensation = Shapes::idx($shape, 'compensation');
    if ($compensation !== null) {
      await $obj->get_compensation()->genWrap($compensation);
    }
    $school = Shapes::idx($shape, 'school');
    if ($school !== null) {
      $obj->school = $school;
    }
    $intern_id = Shapes::idx($shape, 'intern_id');
    if ($intern_id !== null) {
      $obj->intern_id = await \MyTypeIntWrapper::genFromThrift<\detail\i64WithWrapper>($intern_id);
    }
    return $obj;
  }

  public static async function genFromMap_DEPRECATED(@KeyedContainer<string, mixed> $map): Awaitable<this> {
    $obj = new static();
    $weeks = idx($map, 'weeks');
    if ($weeks !== null) {
      $obj->weeks = HH\FIXME\UNSAFE_CAST<mixed, int>($weeks, 'Map value is mixed');
    }
    $title = idx($map, 'title');
    if ($title !== null) {
      $obj->title = HH\FIXME\UNSAFE_CAST<mixed, string>($title, 'Map value is mixed');
    }
    $employer = idx($map, 'employer');
    if ($employer !== null) {
      $obj->employer = HH\FIXME\UNSAFE_CAST<mixed, Company>($employer, 'Map value is mixed');
    }
    $compensation = idx($map, 'compensation');
    if ($compensation !== null) {
      await $obj->get_compensation()->genWrap(HH\FIXME\UNSAFE_CAST<mixed, float>($compensation, 'Map value is mixed'));
    }
    $school = idx($map, 'school');
    if ($school !== null) {
      $obj->school = HH\FIXME\UNSAFE_CAST<mixed, string>($school, 'Map value is mixed');
    }
    $intern_id = idx($map, 'intern_id');
    if ($intern_id !== null) {
      $obj->intern_id = await \MyTypeIntWrapper::genFromThrift<\detail\i64WithWrapper>(HH\FIXME\UNSAFE_CAST<mixed, \detail\i64WithWrapper>($intern_id, 'Map value is mixed'));
    }
    return $obj;
  }

  public function getName()[]: string {
    return 'Internship';
  }

  public function clearTerseFields()[write_props]: void {
  }

  public static function getStructMetadata()[]: \tmeta_ThriftStruct {
    return tmeta_ThriftStruct::fromShape(
      shape(
        "name" => "constants.Internship",
        "fields" => vec[
          tmeta_ThriftField::fromShape(
            shape(
              "id" => 1,
              "type" => tmeta_ThriftType::fromShape(
                shape(
                  "t_primitive" => tmeta_ThriftPrimitiveType::THRIFT_I32_TYPE,
                )
              ),
              "name" => "weeks",
            )
          ),
          tmeta_ThriftField::fromShape(
            shape(
              "id" => 2,
              "type" => tmeta_ThriftType::fromShape(
                shape(
                  "t_primitive" => tmeta_ThriftPrimitiveType::THRIFT_STRING_TYPE,
                )
              ),
              "name" => "title",
            )
          ),
          tmeta_ThriftField::fromShape(
            shape(
              "id" => 3,
              "type" => tmeta_ThriftType::fromShape(
                shape(
                  "t_enum" => tmeta_ThriftEnumType::fromShape(
                    shape(
                      "name" => "constants.Company",
                    )
                  ),
                )
              ),
              "name" => "employer",
              "is_optional" => true,
            )
          ),
          tmeta_ThriftField::fromShape(
            shape(
              "id" => 4,
              "type" => tmeta_ThriftType::fromShape(
                shape(
                  "t_primitive" => tmeta_ThriftPrimitiveType::THRIFT_DOUBLE_TYPE,
                )
              ),
              "name" => "compensation",
              "is_optional" => true,
            )
          ),
          tmeta_ThriftField::fromShape(
            shape(
              "id" => 5,
              "type" => tmeta_ThriftType::fromShape(
                shape(
                  "t_primitive" => tmeta_ThriftPrimitiveType::THRIFT_STRING_TYPE,
                )
              ),
              "name" => "school",
              "is_optional" => true,
            )
          ),
          tmeta_ThriftField::fromShape(
            shape(
              "id" => 6,
              "type" => tmeta_ThriftType::fromShape(
                shape(
                  "t_typedef" => tmeta_ThriftTypedefType::fromShape(
                    shape(
                      "name" => "include.i64WithWrapper",
                      "underlyingType" => tmeta_ThriftType::fromShape(
                        shape(
                          "t_primitive" => tmeta_ThriftPrimitiveType::THRIFT_I64_TYPE,
                        )
                      ),
                    )
                  ),
                )
              ),
              "name" => "intern_id",
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
        'compensation' => shape(
          'field' => dict[
            'AnnotationStruct' => AnnotationStruct::fromShape(
              shape(
              )
            ),
          ],
          'type' => dict[],
        ),
        'intern_id' => shape(
          'field' => dict[],
          'type' => dict[
            '\thrift\annotation\hack\Wrapper' => \thrift\annotation\hack\Wrapper::fromShape(
              shape(
                "name" => "\MyTypeIntWrapper",
                "extraNamespace" => "detail",
              )
            ),
          ],
        ),
      ],
    );
  }

  public static function __stringifyMapKeys<T>(dict<arraykey, T> $m)[]: dict<string, T> {
    return Dict\map_keys($m, $key ==> (string)$key);
  }

  public static async function __genFromShape(self::TShape $shape): Awaitable<this> {
    $obj = new static();
    $obj->weeks = $shape['weeks'];
    $obj->title = $shape['title'];
    $employer = Shapes::idx($shape, 'employer');
    if ($employer !== null) {
      $obj->employer = $employer;
    }
    $compensation = Shapes::idx($shape, 'compensation');
    if ($compensation !== null) {
      await $obj->get_compensation()->genWrap($compensation);
    }
    $school = Shapes::idx($shape, 'school');
    if ($school !== null) {
      $obj->school = $school;
    }
    $obj->intern_id = await \MyTypeIntWrapper::genFromThrift<\detail\i64WithWrapper>($shape['intern_id']);
    return $obj;
  }

  public async function __genToShape(): Awaitable<self::TShape> {
    $compensation = await ($this->compensation as nonnull)->genUnwrap();
    $intern_id = await $this->intern_id->genUnwrap();
    return shape(
      'weeks' => $this->weeks,
      'title' => $this->title,
      'employer' => $this->employer,
      'compensation' => $compensation,
      'school' => $this->school,
      'intern_id' => $intern_id,
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

    if (idx($parsed, 'weeks') !== null) {
      $_tmp0 = (int)HH\FIXME\UNSAFE_CAST<mixed, int>($parsed['weeks']);
      if ($_tmp0 > 0x7fffffff) {
        throw new \TProtocolException("number exceeds limit in field");
      } else {
        $this->weeks = (int)$_tmp0;
      }
    } else {
      throw new \TProtocolException("Required field weeks cannot be found.");
    }
    if (idx($parsed, 'title') !== null) {
      $this->title = HH\FIXME\UNSAFE_CAST<mixed, string>($parsed['title']);
    }
    if (idx($parsed, 'employer') !== null) {
      $this->employer = Company::coerce(HH\FIXME\UNSAFE_CAST<mixed, Company>($parsed['employer']));
    }
    if (idx($parsed, 'compensation') !== null) {
      $this->compensation = HH\FIXME\UNSAFE_CAST<mixed, float>($parsed['compensation']);
    }
    if (idx($parsed, 'school') !== null) {
      $this->school = HH\FIXME\UNSAFE_CAST<mixed, string>($parsed['school']);
    }
    if (idx($parsed, 'intern_id') !== null) {
      $this->intern_id = HH\FIXME\UNSAFE_CAST<mixed, i64WithWrapper>($parsed['intern_id']);
    }
  }

}

/**
 * Original thrift struct:-
 * SWE
 */
class SWE implements \IThriftSyncStruct, \IThriftStructMetadata, \IThriftShapishSyncStruct {
  use \ThriftSerializationTrait;

  const dict<int, this::TFieldSpec> SPEC = dict[
    1 => shape(
      'var' => 'employer',
      'type' => \TType::I32,
      'enum' => Company::class,
    ),
    2 => shape(
      'var' => 'compensation',
      'type' => \TType::DOUBLE,
    ),
  ];
  const dict<string, int> FIELDMAP = dict[
    'employer' => 1,
    'compensation' => 2,
  ];

  const type TConstructorShape = shape(
    ?'employer' => ?Company,
    ?'compensation' => ?float,
  );

  const type TShape = shape(
    ?'employer' => ?Company,
    ?'compensation' => ?float,
  );
  const int STRUCTURAL_ID = 1922683334218183646;
  /**
   * Original thrift field:-
   * 1: enum constants.Company employer
   */
  public ?Company $employer;
  /**
   * Original thrift field:-
   * 2: double compensation
   */
  public ?float $compensation;

  public function __construct(?Company $employer = null, ?float $compensation = null)[] {
    $this->employer = $employer;
    $this->compensation = $compensation;
  }

  public static function withDefaultValues()[]: this {
    return new static();
  }

  public static function fromShape(self::TConstructorShape $shape)[]: this {
    return new static(
      Shapes::idx($shape, 'employer'),
      Shapes::idx($shape, 'compensation'),
    );
  }

  public static function fromMap_DEPRECATED(@KeyedContainer<string, mixed> $map)[]: this {
    return new static(
      HH\FIXME\UNSAFE_CAST<mixed, Company>(idx($map, 'employer'), 'map value is mixed'),
      HH\FIXME\UNSAFE_CAST<mixed, float>(idx($map, 'compensation'), 'map value is mixed'),
    );
  }

  public function getName()[]: string {
    return 'SWE';
  }

  public function clearTerseFields()[write_props]: void {
  }

  public static function getStructMetadata()[]: \tmeta_ThriftStruct {
    return tmeta_ThriftStruct::fromShape(
      shape(
        "name" => "constants.SWE",
        "fields" => vec[
          tmeta_ThriftField::fromShape(
            shape(
              "id" => 1,
              "type" => tmeta_ThriftType::fromShape(
                shape(
                  "t_enum" => tmeta_ThriftEnumType::fromShape(
                    shape(
                      "name" => "constants.Company",
                    )
                  ),
                )
              ),
              "name" => "employer",
              "is_optional" => true,
            )
          ),
          tmeta_ThriftField::fromShape(
            shape(
              "id" => 2,
              "type" => tmeta_ThriftType::fromShape(
                shape(
                  "t_primitive" => tmeta_ThriftPrimitiveType::THRIFT_DOUBLE_TYPE,
                )
              ),
              "name" => "compensation",
              "is_optional" => true,
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

  public static function __stringifyMapKeys<T>(dict<arraykey, T> $m)[]: dict<string, T> {
    return Dict\map_keys($m, $key ==> (string)$key);
  }

  public static function __fromShape(self::TShape $shape)[]: this {
    return new static(
      Shapes::idx($shape, 'employer'),
      Shapes::idx($shape, 'compensation'),
    );
  }

  public function __toShape()[]: self::TShape {
    return shape(
      'employer' => $this->employer,
      'compensation' => $this->compensation,
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

    if (idx($parsed, 'employer') !== null) {
      $this->employer = Company::coerce(HH\FIXME\UNSAFE_CAST<mixed, Company>($parsed['employer']));
    }
    if (idx($parsed, 'compensation') !== null) {
      $this->compensation = HH\FIXME\UNSAFE_CAST<mixed, float>($parsed['compensation']);
    }
  }

}

