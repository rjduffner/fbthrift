/**
 * Autogenerated by Thrift
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */

#include "thrift/compiler/test/fixtures/includes/gen-cpp2/MyServiceAsyncClient.h"

#include <folly/io/IOBuf.h>
#include <folly/io/IOBufQueue.h>
#include <thrift/lib/cpp/TApplicationException.h>
#include <thrift/lib/cpp/transport/THeader.h>
#include <thrift/lib/cpp2/gen/client_cpp.h>
#include <thrift/lib/cpp2/protocol/BinaryProtocol.h>
#include <thrift/lib/cpp2/protocol/CompactProtocol.h>
#include <thrift/lib/cpp2/server/Cpp2ConnContext.h>
#include <thrift/lib/cpp2/GeneratedCodeHelper.h>
#include <thrift/lib/cpp2/GeneratedSerializationCodeHelper.h>

namespace cpp2 {
typedef apache::thrift::ThriftPresult<false, apache::thrift::FieldData<1, apache::thrift::protocol::T_STRUCT,  ::cpp2::MyStruct*>, apache::thrift::FieldData<2, apache::thrift::protocol::T_STRUCT,  ::cpp2::Included*>> MyService_query_pargs;
typedef apache::thrift::ThriftPresult<true> MyService_query_presult;
typedef apache::thrift::ThriftPresult<false, apache::thrift::FieldData<1, apache::thrift::protocol::T_STRUCT,  ::cpp2::MyStruct*>, apache::thrift::FieldData<2, apache::thrift::protocol::T_STRUCT,  ::cpp2::Included*>> MyService_has_arg_docs_pargs;
typedef apache::thrift::ThriftPresult<true> MyService_has_arg_docs_presult;

template <typename Protocol_>
void MyServiceAsyncClient::queryT(Protocol_* prot, bool useSync, apache::thrift::RpcOptions& rpcOptions, std::unique_ptr<apache::thrift::RequestCallback> callback, const  ::cpp2::MyStruct& s, const  ::cpp2::Included& i) {
  auto headerAndReqContext = std::make_shared<apache::thrift::detail::ac::HeaderAndReqContext>();
  std::shared_ptr<apache::thrift::transport::THeader> header(headerAndReqContext, &headerAndReqContext->header);
  header->setProtocolId(getChannel()->getProtocolId());
  header->setHeaders(rpcOptions.releaseWriteHeaders());
  headerAndReqContext->reqContext.setRequestHeader(header.get());
  std::unique_ptr<apache::thrift::ContextStack> ctx = this->getContextStack(this->getServiceName(), "MyService.query", &headerAndReqContext->reqContext);
  MyService_query_pargs args;
  args.get<0>().value = const_cast< ::cpp2::MyStruct*>(&s);
  args.get<1>().value = const_cast< ::cpp2::Included*>(&i);
  auto sizer = [&](Protocol_* p) { return args.serializedSizeZC(p); };
  auto writer = [&](Protocol_* p) { args.write(p); };
  apache::thrift::clientSendT<Protocol_>(prot, rpcOptions, std::move(callback), std::move(ctx), std::move(header), channel_.get(), "query", writer, sizer, apache::thrift::RpcKind::SINGLE_REQUEST_SINGLE_RESPONSE, useSync);
  headerAndReqContext->reqContext.setRequestHeader(nullptr);
}

template <typename Protocol_>
void MyServiceAsyncClient::has_arg_docsT(Protocol_* prot, bool useSync, apache::thrift::RpcOptions& rpcOptions, std::unique_ptr<apache::thrift::RequestCallback> callback, const  ::cpp2::MyStruct& s, const  ::cpp2::Included& i) {
  auto headerAndReqContext = std::make_shared<apache::thrift::detail::ac::HeaderAndReqContext>();
  std::shared_ptr<apache::thrift::transport::THeader> header(headerAndReqContext, &headerAndReqContext->header);
  header->setProtocolId(getChannel()->getProtocolId());
  header->setHeaders(rpcOptions.releaseWriteHeaders());
  headerAndReqContext->reqContext.setRequestHeader(header.get());
  std::unique_ptr<apache::thrift::ContextStack> ctx = this->getContextStack(this->getServiceName(), "MyService.has_arg_docs", &headerAndReqContext->reqContext);
  MyService_has_arg_docs_pargs args;
  args.get<0>().value = const_cast< ::cpp2::MyStruct*>(&s);
  args.get<1>().value = const_cast< ::cpp2::Included*>(&i);
  auto sizer = [&](Protocol_* p) { return args.serializedSizeZC(p); };
  auto writer = [&](Protocol_* p) { args.write(p); };
  apache::thrift::clientSendT<Protocol_>(prot, rpcOptions, std::move(callback), std::move(ctx), std::move(header), channel_.get(), "has_arg_docs", writer, sizer, apache::thrift::RpcKind::SINGLE_REQUEST_SINGLE_RESPONSE, useSync);
  headerAndReqContext->reqContext.setRequestHeader(nullptr);
}



void MyServiceAsyncClient::query(std::unique_ptr<apache::thrift::RequestCallback> callback, const  ::cpp2::MyStruct& s, const  ::cpp2::Included& i) {
  ::apache::thrift::RpcOptions rpcOptions;
  queryImpl(false, rpcOptions, std::move(callback), s, i);
}

void MyServiceAsyncClient::query(apache::thrift::RpcOptions& rpcOptions, std::unique_ptr<apache::thrift::RequestCallback> callback, const  ::cpp2::MyStruct& s, const  ::cpp2::Included& i) {
  queryImpl(false, rpcOptions, std::move(callback), s, i);
}

void MyServiceAsyncClient::queryImpl(bool useSync, apache::thrift::RpcOptions& rpcOptions, std::unique_ptr<apache::thrift::RequestCallback> callback, const  ::cpp2::MyStruct& s, const  ::cpp2::Included& i) {
  switch(getChannel()->getProtocolId()) {
    case apache::thrift::protocol::T_BINARY_PROTOCOL:
    {
      apache::thrift::BinaryProtocolWriter writer;
      queryT(&writer, useSync, rpcOptions, std::move(callback), s, i);
      break;
    }
    case apache::thrift::protocol::T_COMPACT_PROTOCOL:
    {
      apache::thrift::CompactProtocolWriter writer;
      queryT(&writer, useSync, rpcOptions, std::move(callback), s, i);
      break;
    }
    default:
    {
      apache::thrift::detail::ac::throw_app_exn("Could not find Protocol");
    }
  }
}

void MyServiceAsyncClient::sync_query(const  ::cpp2::MyStruct& s, const  ::cpp2::Included& i) {
  ::apache::thrift::RpcOptions rpcOptions;
  sync_query(rpcOptions, s, i);
}

void MyServiceAsyncClient::sync_query(apache::thrift::RpcOptions& rpcOptions, const  ::cpp2::MyStruct& s, const  ::cpp2::Included& i) {
  apache::thrift::ClientReceiveState _returnState;
  apache::thrift::ClientSyncCallback::Waiter waiter;
  auto callback = std::make_unique<apache::thrift::ClientSyncCallback>(
      &_returnState, apache::thrift::RpcKind::SINGLE_REQUEST_SINGLE_RESPONSE, waiter);
  queryImpl(true, rpcOptions, std::move(callback), s, i);
  waiter.waitUntilDone(channel_->getEventBase());
  SCOPE_EXIT {
    if (_returnState.header() && !_returnState.header()->getHeaders().empty()) {
      rpcOptions.setReadHeaders(_returnState.header()->releaseHeaders());
    }
  };
  if (!_returnState.buf()) {
    assert(!!_returnState.exception());
    _returnState.exception().throw_exception();
  }
  recv_query(_returnState);
}

folly::Future<folly::Unit> MyServiceAsyncClient::future_query(const  ::cpp2::MyStruct& s, const  ::cpp2::Included& i) {
  ::apache::thrift::RpcOptions rpcOptions;
  return future_query(rpcOptions, s, i);
}

folly::SemiFuture<folly::Unit> MyServiceAsyncClient::semifuture_query(const  ::cpp2::MyStruct& s, const  ::cpp2::Included& i) {
  ::apache::thrift::RpcOptions rpcOptions;
  return semifuture_query(rpcOptions, s, i);
}

folly::Future<folly::Unit> MyServiceAsyncClient::future_query(apache::thrift::RpcOptions& rpcOptions, const  ::cpp2::MyStruct& s, const  ::cpp2::Included& i) {
  folly::Promise<folly::Unit> _promise;
  auto _future = _promise.getFuture();
  auto callback = std::make_unique<apache::thrift::FutureCallback<folly::Unit>>(std::move(_promise), recv_wrapped_query, channel_);
  query(rpcOptions, std::move(callback), s, i);
  return _future;
}

folly::SemiFuture<folly::Unit> MyServiceAsyncClient::semifuture_query(apache::thrift::RpcOptions& rpcOptions, const  ::cpp2::MyStruct& s, const  ::cpp2::Included& i) {
  auto callbackAndFuture = makeSemiFutureCallback(recv_wrapped_query, channel_);
  auto callback = std::move(callbackAndFuture.first);
  query(rpcOptions, std::move(callback), s, i);
  return std::move(callbackAndFuture.second);
}

folly::Future<std::pair<folly::Unit, std::unique_ptr<apache::thrift::transport::THeader>>> MyServiceAsyncClient::header_future_query(apache::thrift::RpcOptions& rpcOptions, const  ::cpp2::MyStruct& s, const  ::cpp2::Included& i) {
  folly::Promise<std::pair<folly::Unit, std::unique_ptr<apache::thrift::transport::THeader>>> _promise;
  auto _future = _promise.getFuture();
  auto callback = std::make_unique<apache::thrift::HeaderFutureCallback<folly::Unit>>(std::move(_promise), recv_wrapped_query, channel_);
  query(rpcOptions, std::move(callback), s, i);
  return _future;
}

folly::SemiFuture<std::pair<folly::Unit, std::unique_ptr<apache::thrift::transport::THeader>>> MyServiceAsyncClient::header_semifuture_query(apache::thrift::RpcOptions& rpcOptions, const  ::cpp2::MyStruct& s, const  ::cpp2::Included& i) {
  auto callbackAndFuture = makeHeaderSemiFutureCallback(recv_wrapped_query, channel_);
  auto callback = std::move(callbackAndFuture.first);
  query(rpcOptions, std::move(callback), s, i);
  return std::move(callbackAndFuture.second);
}

void MyServiceAsyncClient::query(folly::Function<void (::apache::thrift::ClientReceiveState&&)> callback, const  ::cpp2::MyStruct& s, const  ::cpp2::Included& i) {
  query(std::make_unique<apache::thrift::FunctionReplyCallback>(std::move(callback)), s, i);
}

folly::exception_wrapper MyServiceAsyncClient::recv_wrapped_query(::apache::thrift::ClientReceiveState& state) {
  if (state.isException()) {
    return std::move(state.exception());
  }
  if (!state.buf()) {
    return folly::make_exception_wrapper<apache::thrift::TApplicationException>("recv_ called without result");
  }

  using result = MyService_query_presult;
  constexpr auto const fname = "query";
  switch (state.protocolId()) {
    case apache::thrift::protocol::T_BINARY_PROTOCOL:
    {
      apache::thrift::BinaryProtocolReader reader;
      return apache::thrift::detail::ac::recv_wrapped<result>(
          fname, &reader, state);
    }
    case apache::thrift::protocol::T_COMPACT_PROTOCOL:
    {
      apache::thrift::CompactProtocolReader reader;
      return apache::thrift::detail::ac::recv_wrapped<result>(
          fname, &reader, state);
    }
    default:
    {
    }
  }
  return folly::make_exception_wrapper<apache::thrift::TApplicationException>("Could not find Protocol");
}

void MyServiceAsyncClient::recv_query(::apache::thrift::ClientReceiveState& state) {
  auto ew = recv_wrapped_query(state);
  if (ew) {
    ew.throw_exception();
  }
}

void MyServiceAsyncClient::recv_instance_query(::apache::thrift::ClientReceiveState& state) {
  recv_query(state);
}

folly::exception_wrapper MyServiceAsyncClient::recv_instance_wrapped_query(::apache::thrift::ClientReceiveState& state) {
  return recv_wrapped_query(state);
}

void MyServiceAsyncClient::has_arg_docs(std::unique_ptr<apache::thrift::RequestCallback> callback, const  ::cpp2::MyStruct& s, const  ::cpp2::Included& i) {
  ::apache::thrift::RpcOptions rpcOptions;
  has_arg_docsImpl(false, rpcOptions, std::move(callback), s, i);
}

void MyServiceAsyncClient::has_arg_docs(apache::thrift::RpcOptions& rpcOptions, std::unique_ptr<apache::thrift::RequestCallback> callback, const  ::cpp2::MyStruct& s, const  ::cpp2::Included& i) {
  has_arg_docsImpl(false, rpcOptions, std::move(callback), s, i);
}

void MyServiceAsyncClient::has_arg_docsImpl(bool useSync, apache::thrift::RpcOptions& rpcOptions, std::unique_ptr<apache::thrift::RequestCallback> callback, const  ::cpp2::MyStruct& s, const  ::cpp2::Included& i) {
  switch(getChannel()->getProtocolId()) {
    case apache::thrift::protocol::T_BINARY_PROTOCOL:
    {
      apache::thrift::BinaryProtocolWriter writer;
      has_arg_docsT(&writer, useSync, rpcOptions, std::move(callback), s, i);
      break;
    }
    case apache::thrift::protocol::T_COMPACT_PROTOCOL:
    {
      apache::thrift::CompactProtocolWriter writer;
      has_arg_docsT(&writer, useSync, rpcOptions, std::move(callback), s, i);
      break;
    }
    default:
    {
      apache::thrift::detail::ac::throw_app_exn("Could not find Protocol");
    }
  }
}

void MyServiceAsyncClient::sync_has_arg_docs(const  ::cpp2::MyStruct& s, const  ::cpp2::Included& i) {
  ::apache::thrift::RpcOptions rpcOptions;
  sync_has_arg_docs(rpcOptions, s, i);
}

void MyServiceAsyncClient::sync_has_arg_docs(apache::thrift::RpcOptions& rpcOptions, const  ::cpp2::MyStruct& s, const  ::cpp2::Included& i) {
  apache::thrift::ClientReceiveState _returnState;
  apache::thrift::ClientSyncCallback::Waiter waiter;
  auto callback = std::make_unique<apache::thrift::ClientSyncCallback>(
      &_returnState, apache::thrift::RpcKind::SINGLE_REQUEST_SINGLE_RESPONSE, waiter);
  has_arg_docsImpl(true, rpcOptions, std::move(callback), s, i);
  waiter.waitUntilDone(channel_->getEventBase());
  SCOPE_EXIT {
    if (_returnState.header() && !_returnState.header()->getHeaders().empty()) {
      rpcOptions.setReadHeaders(_returnState.header()->releaseHeaders());
    }
  };
  if (!_returnState.buf()) {
    assert(!!_returnState.exception());
    _returnState.exception().throw_exception();
  }
  recv_has_arg_docs(_returnState);
}

folly::Future<folly::Unit> MyServiceAsyncClient::future_has_arg_docs(const  ::cpp2::MyStruct& s, const  ::cpp2::Included& i) {
  ::apache::thrift::RpcOptions rpcOptions;
  return future_has_arg_docs(rpcOptions, s, i);
}

folly::SemiFuture<folly::Unit> MyServiceAsyncClient::semifuture_has_arg_docs(const  ::cpp2::MyStruct& s, const  ::cpp2::Included& i) {
  ::apache::thrift::RpcOptions rpcOptions;
  return semifuture_has_arg_docs(rpcOptions, s, i);
}

folly::Future<folly::Unit> MyServiceAsyncClient::future_has_arg_docs(apache::thrift::RpcOptions& rpcOptions, const  ::cpp2::MyStruct& s, const  ::cpp2::Included& i) {
  folly::Promise<folly::Unit> _promise;
  auto _future = _promise.getFuture();
  auto callback = std::make_unique<apache::thrift::FutureCallback<folly::Unit>>(std::move(_promise), recv_wrapped_has_arg_docs, channel_);
  has_arg_docs(rpcOptions, std::move(callback), s, i);
  return _future;
}

folly::SemiFuture<folly::Unit> MyServiceAsyncClient::semifuture_has_arg_docs(apache::thrift::RpcOptions& rpcOptions, const  ::cpp2::MyStruct& s, const  ::cpp2::Included& i) {
  auto callbackAndFuture = makeSemiFutureCallback(recv_wrapped_has_arg_docs, channel_);
  auto callback = std::move(callbackAndFuture.first);
  has_arg_docs(rpcOptions, std::move(callback), s, i);
  return std::move(callbackAndFuture.second);
}

folly::Future<std::pair<folly::Unit, std::unique_ptr<apache::thrift::transport::THeader>>> MyServiceAsyncClient::header_future_has_arg_docs(apache::thrift::RpcOptions& rpcOptions, const  ::cpp2::MyStruct& s, const  ::cpp2::Included& i) {
  folly::Promise<std::pair<folly::Unit, std::unique_ptr<apache::thrift::transport::THeader>>> _promise;
  auto _future = _promise.getFuture();
  auto callback = std::make_unique<apache::thrift::HeaderFutureCallback<folly::Unit>>(std::move(_promise), recv_wrapped_has_arg_docs, channel_);
  has_arg_docs(rpcOptions, std::move(callback), s, i);
  return _future;
}

folly::SemiFuture<std::pair<folly::Unit, std::unique_ptr<apache::thrift::transport::THeader>>> MyServiceAsyncClient::header_semifuture_has_arg_docs(apache::thrift::RpcOptions& rpcOptions, const  ::cpp2::MyStruct& s, const  ::cpp2::Included& i) {
  auto callbackAndFuture = makeHeaderSemiFutureCallback(recv_wrapped_has_arg_docs, channel_);
  auto callback = std::move(callbackAndFuture.first);
  has_arg_docs(rpcOptions, std::move(callback), s, i);
  return std::move(callbackAndFuture.second);
}

void MyServiceAsyncClient::has_arg_docs(folly::Function<void (::apache::thrift::ClientReceiveState&&)> callback, const  ::cpp2::MyStruct& s, const  ::cpp2::Included& i) {
  has_arg_docs(std::make_unique<apache::thrift::FunctionReplyCallback>(std::move(callback)), s, i);
}

folly::exception_wrapper MyServiceAsyncClient::recv_wrapped_has_arg_docs(::apache::thrift::ClientReceiveState& state) {
  if (state.isException()) {
    return std::move(state.exception());
  }
  if (!state.buf()) {
    return folly::make_exception_wrapper<apache::thrift::TApplicationException>("recv_ called without result");
  }

  using result = MyService_has_arg_docs_presult;
  constexpr auto const fname = "has_arg_docs";
  switch (state.protocolId()) {
    case apache::thrift::protocol::T_BINARY_PROTOCOL:
    {
      apache::thrift::BinaryProtocolReader reader;
      return apache::thrift::detail::ac::recv_wrapped<result>(
          fname, &reader, state);
    }
    case apache::thrift::protocol::T_COMPACT_PROTOCOL:
    {
      apache::thrift::CompactProtocolReader reader;
      return apache::thrift::detail::ac::recv_wrapped<result>(
          fname, &reader, state);
    }
    default:
    {
    }
  }
  return folly::make_exception_wrapper<apache::thrift::TApplicationException>("Could not find Protocol");
}

void MyServiceAsyncClient::recv_has_arg_docs(::apache::thrift::ClientReceiveState& state) {
  auto ew = recv_wrapped_has_arg_docs(state);
  if (ew) {
    ew.throw_exception();
  }
}

void MyServiceAsyncClient::recv_instance_has_arg_docs(::apache::thrift::ClientReceiveState& state) {
  recv_has_arg_docs(state);
}

folly::exception_wrapper MyServiceAsyncClient::recv_instance_wrapped_has_arg_docs(::apache::thrift::ClientReceiveState& state) {
  return recv_wrapped_has_arg_docs(state);
}

} // cpp2
namespace apache { namespace thrift {

}} // apache::thrift
