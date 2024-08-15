<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: temporal/api/workflowservice/v1/service.proto

namespace GPBMetadata\Temporal\Api\Workflowservice\V1;

class Service
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Temporal\Api\Workflowservice\V1\RequestResponse::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\x8Df\x0A-temporal/api/workflowservice/v1/service.proto\x12\x1Ftemporal.api.workflowservice.v1\x1A\x1Cgoogle/api/annotations.proto2\xDBc\x0A\x0FWorkflowService\x12\xAA\x01\x0A\x11RegisterNamespace\x129.temporal.api.workflowservice.v1.RegisterNamespaceRequest\x1A:.temporal.api.workflowservice.v1.RegisterNamespaceResponse\"\x1E\x82\xD3\xE4\x93\x02\x18\"\x13/cluster/namespaces:\x01*\x12\xB3\x01\x0A\x11DescribeNamespace\x129.temporal.api.workflowservice.v1.DescribeNamespaceRequest\x1A:.temporal.api.workflowservice.v1.DescribeNamespaceResponse\"'\x82\xD3\xE4\x93\x02!\x12\x1F/cluster/namespaces/{namespace}\x12\x9E\x01\x0A\x0EListNamespaces\x126.temporal.api.workflowservice.v1.ListNamespacesRequest\x1A7.temporal.api.workflowservice.v1.ListNamespacesResponse\"\x1B\x82\xD3\xE4\x93\x02\x15\x12\x13/cluster/namespaces\x12\xB7\x01\x0A\x0FUpdateNamespace\x127.temporal.api.workflowservice.v1.UpdateNamespaceRequest\x1A8.temporal.api.workflowservice.v1.UpdateNamespaceResponse\"1\x82\xD3\xE4\x93\x02+\"&/cluster/namespaces/{namespace}/update:\x01*\x12\x8F\x01\x0A\x12DeprecateNamespace\x12:.temporal.api.workflowservice.v1.DeprecateNamespaceRequest\x1A;.temporal.api.workflowservice.v1.DeprecateNamespaceResponse\"\x00\x12\xD5\x01\x0A\x16StartWorkflowExecution\x12>.temporal.api.workflowservice.v1.StartWorkflowExecutionRequest\x1A?.temporal.api.workflowservice.v1.StartWorkflowExecutionResponse\":\x82\xD3\xE4\x93\x024\"//namespaces/{namespace}/workflows/{workflow_id}:\x01*\x12\xDC\x01\x0A\x15ExecuteMultiOperation\x12=.temporal.api.workflowservice.v1.ExecuteMultiOperationRequest\x1A>.temporal.api.workflowservice.v1.ExecuteMultiOperationResponse\"D\x82\xD3\xE4\x93\x02>\"9/namespaces/{namespace}/workflows/execute-multi-operation:\x01*\x12\xF3\x01\x0A\x1BGetWorkflowExecutionHistory\x12C.temporal.api.workflowservice.v1.GetWorkflowExecutionHistoryRequest\x1AD.temporal.api.workflowservice.v1.GetWorkflowExecutionHistoryResponse\"I\x82\xD3\xE4\x93\x02C\x12A/namespaces/{namespace}/workflows/{execution.workflow_id}/history\x12\x90\x02\x0A\"GetWorkflowExecutionHistoryReverse\x12J.temporal.api.workflowservice.v1.GetWorkflowExecutionHistoryReverseRequest\x1AK.temporal.api.workflowservice.v1.GetWorkflowExecutionHistoryReverseResponse\"Q\x82\xD3\xE4\x93\x02K\x12I/namespaces/{namespace}/workflows/{execution.workflow_id}/history-reverse\x12\x98\x01\x0A\x15PollWorkflowTaskQueue\x12=.temporal.api.workflowservice.v1.PollWorkflowTaskQueueRequest\x1A>.temporal.api.workflowservice.v1.PollWorkflowTaskQueueResponse\"\x00\x12\xAD\x01\x0A\x1CRespondWorkflowTaskCompleted\x12D.temporal.api.workflowservice.v1.RespondWorkflowTaskCompletedRequest\x1AE.temporal.api.workflowservice.v1.RespondWorkflowTaskCompletedResponse\"\x00\x12\xA4\x01\x0A\x19RespondWorkflowTaskFailed\x12A.temporal.api.workflowservice.v1.RespondWorkflowTaskFailedRequest\x1AB.temporal.api.workflowservice.v1.RespondWorkflowTaskFailedResponse\"\x00\x12\x98\x01\x0A\x15PollActivityTaskQueue\x12=.temporal.api.workflowservice.v1.PollActivityTaskQueueRequest\x1A>.temporal.api.workflowservice.v1.PollActivityTaskQueueResponse\"\x00\x12\xE1\x01\x0A\x1BRecordActivityTaskHeartbeat\x12C.temporal.api.workflowservice.v1.RecordActivityTaskHeartbeatRequest\x1AD.temporal.api.workflowservice.v1.RecordActivityTaskHeartbeatResponse\"7\x82\xD3\xE4\x93\x021\",/namespaces/{namespace}/activities/heartbeat:\x01*\x12\xF3\x01\x0A\x1FRecordActivityTaskHeartbeatById\x12G.temporal.api.workflowservice.v1.RecordActivityTaskHeartbeatByIdRequest\x1AH.temporal.api.workflowservice.v1.RecordActivityTaskHeartbeatByIdResponse\"=\x82\xD3\xE4\x93\x027\"2/namespaces/{namespace}/activities/heartbeat-by-id:\x01*\x12\xE3\x01\x0A\x1CRespondActivityTaskCompleted\x12D.temporal.api.workflowservice.v1.RespondActivityTaskCompletedRequest\x1AE.temporal.api.workflowservice.v1.RespondActivityTaskCompletedResponse\"6\x82\xD3\xE4\x93\x020\"+/namespaces/{namespace}/activities/complete:\x01*\x12\xF5\x01\x0A RespondActivityTaskCompletedById\x12H.temporal.api.workflowservice.v1.RespondActivityTaskCompletedByIdRequest\x1AI.temporal.api.workflowservice.v1.RespondActivityTaskCompletedByIdResponse\"<\x82\xD3\xE4\x93\x026\"1/namespaces/{namespace}/activities/complete-by-id:\x01*\x12\xD6\x01\x0A\x19RespondActivityTaskFailed\x12A.temporal.api.workflowservice.v1.RespondActivityTaskFailedRequest\x1AB.temporal.api.workflowservice.v1.RespondActivityTaskFailedResponse\"2\x82\xD3\xE4\x93\x02,\"'/namespaces/{namespace}/activities/fail:\x01*\x12\xE8\x01\x0A\x1DRespondActivityTaskFailedById\x12E.temporal.api.workflowservice.v1.RespondActivityTaskFailedByIdRequest\x1AF.temporal.api.workflowservice.v1.RespondActivityTaskFailedByIdResponse\"8\x82\xD3\xE4\x93\x022\"-/namespaces/{namespace}/activities/fail-by-id:\x01*\x12\xDE\x01\x0A\x1BRespondActivityTaskCanceled\x12C.temporal.api.workflowservice.v1.RespondActivityTaskCanceledRequest\x1AD.temporal.api.workflowservice.v1.RespondActivityTaskCanceledResponse\"4\x82\xD3\xE4\x93\x02.\")/namespaces/{namespace}/activities/cancel:\x01*\x12\xF0\x01\x0A\x1FRespondActivityTaskCanceledById\x12G.temporal.api.workflowservice.v1.RespondActivityTaskCanceledByIdRequest\x1AH.temporal.api.workflowservice.v1.RespondActivityTaskCanceledByIdResponse\":\x82\xD3\xE4\x93\x024\"//namespaces/{namespace}/activities/cancel-by-id:\x01*\x12\x87\x02\x0A\x1ERequestCancelWorkflowExecution\x12F.temporal.api.workflowservice.v1.RequestCancelWorkflowExecutionRequest\x1AG.temporal.api.workflowservice.v1.RequestCancelWorkflowExecutionResponse\"T\x82\xD3\xE4\x93\x02N\"I/namespaces/{namespace}/workflows/{workflow_execution.workflow_id}/cancel:\x01*\x12\x80\x02\x0A\x17SignalWorkflowExecution\x12?.temporal.api.workflowservice.v1.SignalWorkflowExecutionRequest\x1A@.temporal.api.workflowservice.v1.SignalWorkflowExecutionResponse\"b\x82\xD3\xE4\x93\x02\\\"W/namespaces/{namespace}/workflows/{workflow_execution.workflow_id}/signal/{signal_name}:\x01*\x12\x93\x02\x0A SignalWithStartWorkflowExecution\x12H.temporal.api.workflowservice.v1.SignalWithStartWorkflowExecutionRequest\x1AI.temporal.api.workflowservice.v1.SignalWithStartWorkflowExecutionResponse\"Z\x82\xD3\xE4\x93\x02T\"O/namespaces/{namespace}/workflows/{workflow_id}/signal-with-start/{signal_name}:\x01*\x12\xEE\x01\x0A\x16ResetWorkflowExecution\x12>.temporal.api.workflowservice.v1.ResetWorkflowExecutionRequest\x1A?.temporal.api.workflowservice.v1.ResetWorkflowExecutionResponse\"S\x82\xD3\xE4\x93\x02M\"H/namespaces/{namespace}/workflows/{workflow_execution.workflow_id}/reset:\x01*\x12\xFE\x01\x0A\x1ATerminateWorkflowExecution\x12B.temporal.api.workflowservice.v1.TerminateWorkflowExecutionRequest\x1AC.temporal.api.workflowservice.v1.TerminateWorkflowExecutionResponse\"W\x82\xD3\xE4\x93\x02Q\"L/namespaces/{namespace}/workflows/{workflow_execution.workflow_id}/terminate:\x01*\x12\x9E\x01\x0A\x17DeleteWorkflowExecution\x12?.temporal.api.workflowservice.v1.DeleteWorkflowExecutionRequest\x1A@.temporal.api.workflowservice.v1.DeleteWorkflowExecutionResponse\"\x00\x12\xA7\x01\x0A\x1AListOpenWorkflowExecutions\x12B.temporal.api.workflowservice.v1.ListOpenWorkflowExecutionsRequest\x1AC.temporal.api.workflowservice.v1.ListOpenWorkflowExecutionsResponse\"\x00\x12\xAD\x01\x0A\x1CListClosedWorkflowExecutions\x12D.temporal.api.workflowservice.v1.ListClosedWorkflowExecutionsRequest\x1AE.temporal.api.workflowservice.v1.ListClosedWorkflowExecutionsResponse\"\x00\x12\xC4\x01\x0A\x16ListWorkflowExecutions\x12>.temporal.api.workflowservice.v1.ListWorkflowExecutionsRequest\x1A?.temporal.api.workflowservice.v1.ListWorkflowExecutionsResponse\")\x82\xD3\xE4\x93\x02#\x12!/namespaces/{namespace}/workflows\x12\xE5\x01\x0A\x1EListArchivedWorkflowExecutions\x12F.temporal.api.workflowservice.v1.ListArchivedWorkflowExecutionsRequest\x1AG.temporal.api.workflowservice.v1.ListArchivedWorkflowExecutionsResponse\"2\x82\xD3\xE4\x93\x02,\x12*/namespaces/{namespace}/archived-workflows\x12\x9B\x01\x0A\x16ScanWorkflowExecutions\x12>.temporal.api.workflowservice.v1.ScanWorkflowExecutionsRequest\x1A?.temporal.api.workflowservice.v1.ScanWorkflowExecutionsResponse\"\x00\x12\xCC\x01\x0A\x17CountWorkflowExecutions\x12?.temporal.api.workflowservice.v1.CountWorkflowExecutionsRequest\x1A@.temporal.api.workflowservice.v1.CountWorkflowExecutionsResponse\".\x82\xD3\xE4\x93\x02(\x12&/namespaces/{namespace}/workflow-count\x12\x92\x01\x0A\x13GetSearchAttributes\x12;.temporal.api.workflowservice.v1.GetSearchAttributesRequest\x1A<.temporal.api.workflowservice.v1.GetSearchAttributesResponse\"\x00\x12\xA4\x01\x0A\x19RespondQueryTaskCompleted\x12A.temporal.api.workflowservice.v1.RespondQueryTaskCompletedRequest\x1AB.temporal.api.workflowservice.v1.RespondQueryTaskCompletedResponse\"\x00\x12\x95\x01\x0A\x14ResetStickyTaskQueue\x12<.temporal.api.workflowservice.v1.ResetStickyTaskQueueRequest\x1A=.temporal.api.workflowservice.v1.ResetStickyTaskQueueResponse\"\x00\x12\xDD\x01\x0A\x0DQueryWorkflow\x125.temporal.api.workflowservice.v1.QueryWorkflowRequest\x1A6.temporal.api.workflowservice.v1.QueryWorkflowResponse\"]\x82\xD3\xE4\x93\x02W\"R/namespaces/{namespace}/workflows/{execution.workflow_id}/query/{query.query_type}:\x01*\x12\xE5\x01\x0A\x19DescribeWorkflowExecution\x12A.temporal.api.workflowservice.v1.DescribeWorkflowExecutionRequest\x1AB.temporal.api.workflowservice.v1.DescribeWorkflowExecutionResponse\"A\x82\xD3\xE4\x93\x02;\x129/namespaces/{namespace}/workflows/{execution.workflow_id}\x12\xC9\x01\x0A\x11DescribeTaskQueue\x129.temporal.api.workflowservice.v1.DescribeTaskQueueRequest\x1A:.temporal.api.workflowservice.v1.DescribeTaskQueueResponse\"=\x82\xD3\xE4\x93\x027\x125/namespaces/{namespace}/task-queues/{task_queue.name}\x12\x98\x01\x0A\x0EGetClusterInfo\x126.temporal.api.workflowservice.v1.GetClusterInfoRequest\x1A7.temporal.api.workflowservice.v1.GetClusterInfoResponse\"\x15\x82\xD3\xE4\x93\x02\x0F\x12\x0D/cluster-info\x12\x94\x01\x0A\x0DGetSystemInfo\x125.temporal.api.workflowservice.v1.GetSystemInfoRequest\x1A6.temporal.api.workflowservice.v1.GetSystemInfoResponse\"\x14\x82\xD3\xE4\x93\x02\x0E\x12\x0C/system-info\x12\x9E\x01\x0A\x17ListTaskQueuePartitions\x12?.temporal.api.workflowservice.v1.ListTaskQueuePartitionsRequest\x1A@.temporal.api.workflowservice.v1.ListTaskQueuePartitionsResponse\"\x00\x12\xBD\x01\x0A\x0ECreateSchedule\x126.temporal.api.workflowservice.v1.CreateScheduleRequest\x1A7.temporal.api.workflowservice.v1.CreateScheduleResponse\":\x82\xD3\xE4\x93\x024\"//namespaces/{namespace}/schedules/{schedule_id}:\x01*\x12\xC0\x01\x0A\x10DescribeSchedule\x128.temporal.api.workflowservice.v1.DescribeScheduleRequest\x1A9.temporal.api.workflowservice.v1.DescribeScheduleResponse\"7\x82\xD3\xE4\x93\x021\x12//namespaces/{namespace}/schedules/{schedule_id}\x12\xC4\x01\x0A\x0EUpdateSchedule\x126.temporal.api.workflowservice.v1.UpdateScheduleRequest\x1A7.temporal.api.workflowservice.v1.UpdateScheduleResponse\"A\x82\xD3\xE4\x93\x02;\"6/namespaces/{namespace}/schedules/{schedule_id}/update:\x01*\x12\xC0\x01\x0A\x0DPatchSchedule\x125.temporal.api.workflowservice.v1.PatchScheduleRequest\x1A6.temporal.api.workflowservice.v1.PatchScheduleResponse\"@\x82\xD3\xE4\x93\x02:\"5/namespaces/{namespace}/schedules/{schedule_id}/patch:\x01*\x12\xEA\x01\x0A\x19ListScheduleMatchingTimes\x12A.temporal.api.workflowservice.v1.ListScheduleMatchingTimesRequest\x1AB.temporal.api.workflowservice.v1.ListScheduleMatchingTimesResponse\"F\x82\xD3\xE4\x93\x02@\x12>/namespaces/{namespace}/schedules/{schedule_id}/matching-times\x12\xBA\x01\x0A\x0EDeleteSchedule\x126.temporal.api.workflowservice.v1.DeleteScheduleRequest\x1A7.temporal.api.workflowservice.v1.DeleteScheduleResponse\"7\x82\xD3\xE4\x93\x021*//namespaces/{namespace}/schedules/{schedule_id}\x12\xA9\x01\x0A\x0DListSchedules\x125.temporal.api.workflowservice.v1.ListSchedulesRequest\x1A6.temporal.api.workflowservice.v1.ListSchedulesResponse\")\x82\xD3\xE4\x93\x02#\x12!/namespaces/{namespace}/schedules\x12\xB9\x01\x0A UpdateWorkerBuildIdCompatibility\x12H.temporal.api.workflowservice.v1.UpdateWorkerBuildIdCompatibilityRequest\x1AI.temporal.api.workflowservice.v1.UpdateWorkerBuildIdCompatibilityResponse\"\x00\x12\x86\x02\x0A\x1DGetWorkerBuildIdCompatibility\x12E.temporal.api.workflowservice.v1.GetWorkerBuildIdCompatibilityRequest\x1AF.temporal.api.workflowservice.v1.GetWorkerBuildIdCompatibilityResponse\"V\x82\xD3\xE4\x93\x02P\x12N/namespaces/{namespace}/task-queues/{task_queue}/worker-build-id-compatibility\x12\xAA\x01\x0A\x1BUpdateWorkerVersioningRules\x12C.temporal.api.workflowservice.v1.UpdateWorkerVersioningRulesRequest\x1AD.temporal.api.workflowservice.v1.UpdateWorkerVersioningRulesResponse\"\x00\x12\xF1\x01\x0A\x18GetWorkerVersioningRules\x12@.temporal.api.workflowservice.v1.GetWorkerVersioningRulesRequest\x1AA.temporal.api.workflowservice.v1.GetWorkerVersioningRulesResponse\"P\x82\xD3\xE4\x93\x02J\x12H/namespaces/{namespace}/task-queues/{task_queue}/worker-versioning-rules\x12\xDC\x01\x0A\x19GetWorkerTaskReachability\x12A.temporal.api.workflowservice.v1.GetWorkerTaskReachabilityRequest\x1AB.temporal.api.workflowservice.v1.GetWorkerTaskReachabilityResponse\"8\x82\xD3\xE4\x93\x022\x120/namespaces/{namespace}/worker-task-reachability\x12\x87\x02\x0A\x17UpdateWorkflowExecution\x12?.temporal.api.workflowservice.v1.UpdateWorkflowExecutionRequest\x1A@.temporal.api.workflowservice.v1.UpdateWorkflowExecutionResponse\"i\x82\xD3\xE4\x93\x02c\"^/namespaces/{namespace}/workflows/{workflow_execution.workflow_id}/update/{request.input.name}:\x01*\x12\xAA\x01\x0A\x1BPollWorkflowExecutionUpdate\x12C.temporal.api.workflowservice.v1.PollWorkflowExecutionUpdateRequest\x1AD.temporal.api.workflowservice.v1.PollWorkflowExecutionUpdateResponse\"\x00\x12\xCE\x01\x0A\x13StartBatchOperation\x12;.temporal.api.workflowservice.v1.StartBatchOperationRequest\x1A<.temporal.api.workflowservice.v1.StartBatchOperationResponse\"<\x82\xD3\xE4\x93\x026\"1/namespaces/{namespace}/batch-operations/{job_id}:\x01*\x12\xD0\x01\x0A\x12StopBatchOperation\x12:.temporal.api.workflowservice.v1.StopBatchOperationRequest\x1A;.temporal.api.workflowservice.v1.StopBatchOperationResponse\"A\x82\xD3\xE4\x93\x02;\"6/namespaces/{namespace}/batch-operations/{job_id}/stop:\x01*\x12\xD4\x01\x0A\x16DescribeBatchOperation\x12>.temporal.api.workflowservice.v1.DescribeBatchOperationRequest\x1A?.temporal.api.workflowservice.v1.DescribeBatchOperationResponse\"9\x82\xD3\xE4\x93\x023\x121/namespaces/{namespace}/batch-operations/{job_id}\x12\xC2\x01\x0A\x13ListBatchOperations\x12;.temporal.api.workflowservice.v1.ListBatchOperationsRequest\x1A<.temporal.api.workflowservice.v1.ListBatchOperationsResponse\"0\x82\xD3\xE4\x93\x02*\x12(/namespaces/{namespace}/batch-operations\x12\x8F\x01\x0A\x12PollNexusTaskQueue\x12:.temporal.api.workflowservice.v1.PollNexusTaskQueueRequest\x1A;.temporal.api.workflowservice.v1.PollNexusTaskQueueResponse\"\x00\x12\xA4\x01\x0A\x19RespondNexusTaskCompleted\x12A.temporal.api.workflowservice.v1.RespondNexusTaskCompletedRequest\x1AB.temporal.api.workflowservice.v1.RespondNexusTaskCompletedResponse\"\x00\x12\x9B\x01\x0A\x16RespondNexusTaskFailed\x12>.temporal.api.workflowservice.v1.RespondNexusTaskFailedRequest\x1A?.temporal.api.workflowservice.v1.RespondNexusTaskFailedResponse\"\x00B\xB6\x01\x0A\"io.temporal.api.workflowservice.v1B\x0CServiceProtoP\x01Z5go.temporal.io/api/workflowservice/v1;workflowservice\xAA\x02!Temporalio.Api.WorkflowService.V1\xEA\x02\$Temporalio::Api::WorkflowService::V1b\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}
