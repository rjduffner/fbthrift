<?hh // strict
/**
 * Autogenerated by Thrift
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */

/**
 * Original thrift service:-
 * Bar
 */
interface BarAsyncIf extends \IThriftAsyncIf {
  /**
   * Original thrift definition:-
   * string
   *   baz(1: set<i32> a,
   *       2: list<map<i32, set<string>>> b);
   */
  public function baz(keyset<int> $a, \HH\KeyedContainer<int, \HH\KeyedContainer<int, keyset<string>>> $b): Awaitable<string>;
}

/**
 * Original thrift service:-
 * Bar
 */
interface BarIf extends \IThriftSyncIf {
  /**
   * Original thrift definition:-
   * string
   *   baz(1: set<i32> a,
   *       2: list<map<i32, set<string>>> b);
   */
  public function baz(keyset<int> $a, \HH\KeyedContainer<int, \HH\KeyedContainer<int, keyset<string>>> $b): string;
}

/**
 * Original thrift service:-
 * Bar
 */
interface BarClientIf extends \IThriftSyncIf {
  /**
   * Original thrift definition:-
   * string
   *   baz(1: set<i32> a,
   *       2: list<map<i32, set<string>>> b);
   */
  public function baz(keyset<int> $a, \HH\KeyedContainer<int, \HH\KeyedContainer<int, keyset<string>>> $b): Awaitable<string>;
}

/**
 * Original thrift service:-
 * Bar
 */
trait BarClientBase {
  require extends \ThriftClientBase;

  protected function sendImpl_baz(keyset<int> $a, \HH\KeyedContainer<int, \HH\KeyedContainer<int, keyset<string>>> $b): int {
    $currentseqid = $this->getNextSequenceID();
    $args = new Bar_baz_args(
      $a,
      Vec\map($b, 
        $_val0 ==> dict($_val0)
      ),
    );
    try {
      $this->eventHandler_->preSend('baz', $args, $currentseqid);
      if ($this->output_ is \TBinaryProtocolAccelerated)
      {
        \thrift_protocol_write_binary($this->output_, 'baz', \TMessageType::CALL, $args, $currentseqid, $this->output_->isStrictWrite(), false);
      }
      else if ($this->output_ is \TCompactProtocolAccelerated)
      {
        \thrift_protocol_write_compact($this->output_, 'baz', \TMessageType::CALL, $args, $currentseqid, false);
      }
      else
      {
        $this->output_->writeMessageBegin('baz', \TMessageType::CALL, $currentseqid);
        $args->write($this->output_);
        $this->output_->writeMessageEnd();
        $this->output_->getTransport()->flush();
      }
    } catch (\THandlerShortCircuitException $ex) {
      switch ($ex->resultType) {
        case \THandlerShortCircuitException::R_EXPECTED_EX:
        case \THandlerShortCircuitException::R_UNEXPECTED_EX:
          $this->eventHandler_->sendError('baz', $args, $currentseqid, $ex->result);
          throw $ex->result;
        case \THandlerShortCircuitException::R_SUCCESS:
        default:
          $this->eventHandler_->postSend('baz', $args, $currentseqid);
          return $currentseqid;
      }
    } catch (\Exception $ex) {
      $this->eventHandler_->sendError('baz', $args, $currentseqid, $ex);
      throw $ex;
    }
    $this->eventHandler_->postSend('baz', $args, $currentseqid);
    return $currentseqid;
  }

  protected function recvImpl_baz(?int $expectedsequenceid = null): string {
    try {
      $this->eventHandler_->preRecv('baz', $expectedsequenceid);
      if ($this->input_ is \TBinaryProtocolAccelerated) {
        $result = \thrift_protocol_read_binary($this->input_, 'Bar_baz_result', $this->input_->isStrictRead());
      } else if ($this->input_ is \TCompactProtocolAccelerated)
      {
        $result = \thrift_protocol_read_compact($this->input_, 'Bar_baz_result');
      }
      else
      {
        $rseqid = 0;
        $fname = '';
        $mtype = 0;

        $this->input_->readMessageBegin(
          inout $fname,
          inout $mtype,
          inout $rseqid,
        );
        if ($mtype == \TMessageType::EXCEPTION) {
          $x = new \TApplicationException();
          $x->read($this->input_);
          $this->input_->readMessageEnd();
          throw $x;
        }
        $result = new Bar_baz_result();
        $result->read($this->input_);
        $this->input_->readMessageEnd();
        if ($expectedsequenceid !== null && ($rseqid != $expectedsequenceid)) {
          throw new \TProtocolException("baz failed: sequence id is out of order");
        }
      }
    } catch (\THandlerShortCircuitException $ex) {
      switch ($ex->resultType) {
        case \THandlerShortCircuitException::R_EXPECTED_EX:
          $this->eventHandler_->recvException('baz', $expectedsequenceid, $ex->result);
          throw $ex->result;
        case \THandlerShortCircuitException::R_UNEXPECTED_EX:
          $this->eventHandler_->recvError('baz', $expectedsequenceid, $ex->result);
          throw $ex->result;
        case \THandlerShortCircuitException::R_SUCCESS:
        default:
          $this->eventHandler_->postRecv('baz', $expectedsequenceid, $ex->result);
          return $ex->result;
      }
    } catch (\Exception $ex) {
      $this->eventHandler_->recvError('baz', $expectedsequenceid, $ex);
      throw $ex;
    }
    if ($result->success !== null) {
      $success = $result->success;
      $this->eventHandler_->postRecv('baz', $expectedsequenceid, $success);
      return $success;
    }
    $x = new \TApplicationException("baz failed: unknown result", \TApplicationException::MISSING_RESULT);
    $this->eventHandler_->recvError('baz', $expectedsequenceid, $x);
    throw $x;
  }

}

class BarAsyncClient extends \ThriftClientBase implements BarAsyncIf {
  use BarClientBase;

  /**
   * Original thrift definition:-
   * string
   *   baz(1: set<i32> a,
   *       2: list<map<i32, set<string>>> b);
   */
  public async function baz(keyset<int> $a, \HH\KeyedContainer<int, \HH\KeyedContainer<int, keyset<string>>> $b): Awaitable<string> {
    $currentseqid = $this->sendImpl_baz($a, $b);
    await $this->asyncHandler_->genWait($currentseqid);
    return $this->recvImpl_baz($currentseqid);
  }

}

class BarClient extends \ThriftClientBase implements BarClientIf {
  use BarClientBase;

  /**
   * Original thrift definition:-
   * string
   *   baz(1: set<i32> a,
   *       2: list<map<i32, set<string>>> b);
   */
  public async function baz(keyset<int> $a, \HH\KeyedContainer<int, \HH\KeyedContainer<int, keyset<string>>> $b): Awaitable<string> {
    $currentseqid = $this->sendImpl_baz($a, $b);
    await $this->asyncHandler_->genWait($currentseqid);
    return $this->recvImpl_baz($currentseqid);
  }

  <<__Deprecated('use baz')>>
  public async function gen_baz(keyset<int> $a, \HH\KeyedContainer<int, \HH\KeyedContainer<int, keyset<string>>> $b): Awaitable<string> {
    $currentseqid = $this->sendImpl_baz($a, $b);
    await $this->asyncHandler_->genWait($currentseqid);
    return $this->recvImpl_baz($currentseqid);
  }

  /* send and recv functions */
  public function send_baz(keyset<int> $a, \HH\KeyedContainer<int, \HH\KeyedContainer<int, keyset<string>>> $b): int {
    return $this->sendImpl_baz($a, $b);
  }
  public function recv_baz(?int $expectedsequenceid = null): string {
    return $this->recvImpl_baz($expectedsequenceid);
  }
}

// HELPER FUNCTIONS AND STRUCTURES

class Bar_baz_args implements \IThriftStruct {
  use \ThriftSerializationTrait;

  const dict<int, this::TFieldSpec> SPEC = dict[
    1 => shape(
      'var' => 'a',
      'type' => \TType::SET,
      'etype' => \TType::I32,
      'elem' => shape(
        'type' => \TType::I32,
      ),
      'format' => 'harray',
    ),
    2 => shape(
      'var' => 'b',
      'type' => \TType::LST,
      'etype' => \TType::MAP,
      'elem' => shape(
        'type' => \TType::MAP,
        'ktype' => \TType::I32,
        'vtype' => \TType::SET,
        'key' => shape(
          'type' => \TType::I32,
        ),
        'val' => shape(
          'type' => \TType::SET,
          'etype' => \TType::STRING,
          'elem' => shape(
            'type' => \TType::STRING,
          ),
          'format' => 'harray',
        ),
        'format' => 'harray',
      ),
      'format' => 'harray',
    ),
  ];
  const dict<string, int> FIELDMAP = dict[
    'a' => 1,
    'b' => 2,
  ];
  const int STRUCTURAL_ID = 5283012534631553068;
  public keyset<int> $a;
  public vec<dict<int, keyset<string>>> $b;

  <<__Rx>>
  public function __construct(?keyset<int> $a = null, ?vec<dict<int, keyset<string>>> $b = null  ) {
    if ($a === null) {
      $this->a = keyset[];
    } else {
      $this->a = $a;
    }
    if ($b === null) {
      $this->b = vec[];
    } else {
      $this->b = $b;
    }
  }

  public function getName(): string {
    return 'Bar_baz_args';
  }

}

class Bar_baz_result implements \IThriftStruct {
  use \ThriftSerializationTrait;

  const dict<int, this::TFieldSpec> SPEC = dict[
    0 => shape(
      'var' => 'success',
      'type' => \TType::STRING,
    ),
  ];
  const dict<string, int> FIELDMAP = dict[
    'success' => 0,
  ];
  const int STRUCTURAL_ID = 1365128170602685579;
  public ?string $success;

  <<__Rx>>
  public function __construct(?string $success = null  ) {
  }

  public function getName(): string {
    return 'Bar_baz_result';
  }

}

