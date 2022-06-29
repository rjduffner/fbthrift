/*
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

include "thrift/annotation/scope.thrift"

package "facebook.com/thrift/annotation/python"

namespace java com.facebook.thrift.annotation.python_deprecated
namespace py.asyncio facebook_thrift_asyncio.annotation.python
namespace go thrift.annotation.python
namespace py thrift.annotation.python

// An annotation that applies a Python adapter to typedef or fields. For example:
//
//   @python.Adapter{name = "my.module.DatetimeAdapter", typeHint = "datetime.datetime"}
//   typedef i64 Datetime
//
// Here the type 'Datetime' has the Python adapter `DatetimeAdapter`.
//
//   struct User {
//     @python.Adapter{name = "my.module.DatetimeAdapter", typeHint = "datetime.datetime"}
//     1: i64 created_at;
//   }
//
// Here the field `created_at` has the Python adapter `DatetimeAdapter`.
@scope.Field
@scope.Typedef
struct Adapter {
  // Fully qualified name of a Python adapter class that's subclass of
  // thrift/lib/python/adapters/base.py
  1: string name;
  // Fully qualified type hint the above implmenantion adapts too
  2: string typeHint;
} (thrift.uri = "facebook.com/thrift/annotation/python/Adapter")
