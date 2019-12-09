# AnalyticsMediaEndpointStat

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**codecs** | **string[]** | The MIME types of the audio encodings used by the audio streams belonging to this endpoint | [optional] 
**minMos** | **double** | The lowest estimated average MOS among all the audio streams belonging to this endpoint | [optional] 
**minRFactor** | **double** | The lowest R-factor value among all of the audio streams belonging to this endpoint | [optional] 
**maxLatencyMs** | **int** | The maximum latency experienced by any audio stream belonging to this endpoint, in milliseconds | [optional] 
**receivedPackets** | **int** | The total number of packets received for all audio streams belonging to this endpoint (includes invalid, duplicate, and discarded packets) | [optional] 
**invalidPackets** | **int** | The total number of malformed or not RTP packets, unknown payload type, or discarded probation packets for all audio streams belonging to this endpoint | [optional] 
**discardedPackets** | **int** | The total number of packets received too late or too early, jitter queue overrun or underrun, for all audio streams belonging to this endpoint | [optional] 
**duplicatePackets** | **int** | The total number of packets received with the same sequence number as another one recently received (window of 64 packets), for all audio streams belonging to this endpoint | [optional] 
**overrunPackets** | **int** | The total number of packets for which there was no room in the jitter queue when it was received, for all audio streams belonging to this endpoint (also counted in discarded) | [optional] 
**underrunPackets** | **int** | The total number of packets received after their timestamp/seqnum has been played out, for all audio streams belonging to this endpoint (also counted in discarded) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


