/**
 * Autogenerated by Thrift
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */

package test.fixtures.basic_swift_bean;

import com.facebook.swift.codec.*;
import com.facebook.swift.codec.ThriftField.Requiredness;
import com.facebook.swift.codec.ThriftField.Recursiveness;
import com.google.common.collect.*;
import java.util.*;
import javax.annotation.Nullable;
import org.apache.thrift.*;
import org.apache.thrift.transport.*;
import org.apache.thrift.protocol.*;
import static com.google.common.base.MoreObjects.toStringHelper;
import static com.google.common.base.MoreObjects.ToStringHelper;

@SwiftGenerated
@com.facebook.swift.codec.ThriftStruct("LegacyStruct")
public final class LegacyStruct implements com.facebook.thrift.payload.ThriftSerializable {

    @ThriftConstructor
    public LegacyStruct() {
      this.normal = 0;
      this.bad = 0;
    }
    
    public static class Builder {
    
        private int normal = 0;
        private int bad = 0;
    
        @com.facebook.swift.codec.ThriftField(value=1, name="normal", requiredness=Requiredness.NONE)
        public Builder setNormal(int normal) {
            this.normal = normal;
            return this;
        }
    
        public int getNormal() { return normal; }
    
            @com.facebook.swift.codec.ThriftField(value=-1, name="bad", isLegacyId=true, requiredness=Requiredness.NONE)
        public Builder setBad(int bad) {
            this.bad = bad;
            return this;
        }
    
        public int getBad() { return bad; }
    
        public Builder() { }
        public Builder(LegacyStruct other) {
            this.normal = other.normal;
            this.bad = other.bad;
        }
    
        @ThriftConstructor
        public LegacyStruct build() {
            LegacyStruct result = new LegacyStruct();
            result.normal = this.normal;
            result.bad = this.bad;
            return result;
        }
    }
            public static final Map<String, Integer> NAMES_TO_IDS = new HashMap();
    public static final Map<String, Integer> THRIFT_NAMES_TO_IDS = new HashMap();
    public static final Map<Integer, TField> FIELD_METADATA = new HashMap<>();
    private static final TStruct STRUCT_DESC = new TStruct("LegacyStruct");
    private int normal;
    public static final int _NORMAL = 1;
    private static final TField NORMAL_FIELD_DESC = new TField("normal", TType.I32, (short)1);
    private int bad;
    public static final int _BAD = -1;
    private static final TField BAD_FIELD_DESC = new TField("bad", TType.I32, (short)-1);
static {
      NAMES_TO_IDS.put("normal", 1);
      THRIFT_NAMES_TO_IDS.put("normal", 1);
      FIELD_METADATA.put(1, NORMAL_FIELD_DESC);
      NAMES_TO_IDS.put("bad", -1);
      THRIFT_NAMES_TO_IDS.put("bad", -1);
      FIELD_METADATA.put(-1, BAD_FIELD_DESC);
    }
    
    
    @com.facebook.swift.codec.ThriftField(value=1, name="normal", requiredness=Requiredness.NONE)
    public int getNormal() { return normal; }
    
    @com.facebook.swift.codec.ThriftField
    public LegacyStruct setNormal(int normal) {
        this.normal = normal;
        return this;
    }
    
    
    
    @com.facebook.swift.codec.ThriftField(value=-1, name="bad", isLegacyId=true, requiredness=Requiredness.NONE)
    public int getBad() { return bad; }
    
    @com.facebook.swift.codec.ThriftField
    public LegacyStruct setBad(int bad) {
        this.bad = bad;
        return this;
    }
    
    @java.lang.Override
    public String toString() {
        ToStringHelper helper = toStringHelper(this);
        helper.add("normal", normal);
        helper.add("bad", bad);
        return helper.toString();
    }
    
    @java.lang.Override
    public boolean equals(java.lang.Object o) {
        if (this == o) {
            return true;
        }
        if (o == null || getClass() != o.getClass()) {
            return false;
        }
    
        LegacyStruct other = (LegacyStruct)o;
    
        return
            Objects.equals(normal, other.normal) &&
            Objects.equals(bad, other.bad) &&
            true;
    }
    
    @java.lang.Override
    public int hashCode() {
        return Arrays.deepHashCode(new java.lang.Object[] {
            normal,
            bad
        });
    }
    
    
    public static com.facebook.thrift.payload.Reader<LegacyStruct> asReader() {
      return LegacyStruct::read0;
    }
    
    public static LegacyStruct read0(TProtocol oprot) throws TException {
      TField __field;
      oprot.readStructBegin(LegacyStruct.NAMES_TO_IDS, LegacyStruct.THRIFT_NAMES_TO_IDS, LegacyStruct.FIELD_METADATA);
      LegacyStruct.Builder builder = new LegacyStruct.Builder();
      while (true) {
        __field = oprot.readFieldBegin();
        if (__field.type == TType.STOP) { break; }
        switch (__field.id) {
        case _NORMAL:
          if (__field.type == TType.I32) {
            int normal = oprot.readI32();
            builder.setNormal(normal);
          } else {
            TProtocolUtil.skip(oprot, __field.type);
          }
          break;
        case _BAD:
          if (__field.type == TType.I32) {
            int bad = oprot.readI32();
            builder.setBad(bad);
          } else {
            TProtocolUtil.skip(oprot, __field.type);
          }
          break;
        default:
          TProtocolUtil.skip(oprot, __field.type);
          break;
        }
        oprot.readFieldEnd();
      }
      oprot.readStructEnd();
      return builder.build();
    }
    
    public void write0(TProtocol oprot) throws TException {
      oprot.writeStructBegin(STRUCT_DESC);
      oprot.writeFieldBegin(NORMAL_FIELD_DESC);
      oprot.writeI32(this.normal);
      oprot.writeFieldEnd();
      oprot.writeFieldBegin(BAD_FIELD_DESC);
      oprot.writeI32(this.bad);
      oprot.writeFieldEnd();
      oprot.writeFieldStop();
      oprot.writeStructEnd();
    }
    

}
