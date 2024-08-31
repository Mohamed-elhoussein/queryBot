# API Documentation

## Base URL
`http://127.0.0.1:8000/api`







### POST /api/register
**Description**: register user and returns responses.
**Request**:

{
    "name":"string"
    "email":"string"
    "password":"string"
}
**Response**:


{
    "token":  Response data
}



### POST /api/login
**Description**: login user and returns responses.
**Request**:

{
    "email":"string"
    "password":"string"
}
**Response**:


{
    "token":  Response data
}







### POST /api/logout
**Description**: logout user and returns responses.
**Response**:
{
"message": "Logged out"

}









### POST /api/query-bot
**Description**: Processes user queries and returns responses.

**Request**:

{
    "query": "string"
}

**Response**:

{
    "status": "success",
    "data": {
        // Response data
    }
}


Error Response:
{
    "status": "error",
    "message": "Error message"
}

**end Response**:
#####




###  GET /api/call-logs
**Description**: Processes user queries and returns responses.

**Request**:
{
"agent_id" :  "(optional, integer)"
"status"   :  "(optional, [answered,missed])"
"time"     :  "(optional, H:m:s )"
"day"      :  "(optional, D )"
"month"    :  "(optional, M )"
"year"     :  "(optional, Y )"
"between"  :  "(optional,[startDate, $endDate] )"

}


### Response:

{
    "status": "success",
    "data": [
        {
            "id": 1,
            "agent_id": 101,
            "call_time": 34,
            "duration": 120,
            "status": "answered",
            "created_at": "2024-08-30T14:00:00Z"
        }
        // More logs
    ]
}
### end Response:






###  GET /api/agent-performance
**Description**: Processes user queries and returns responses.

**Request**:
{
"agent_id" :  "(optional, integer)"
"time "    :  "(optional, H:m:s )"
"day "     :  "(optional, D )"
"month "   :  "(optional, M )"
"year"     :  "(optional, Y )"
}


### Response:
{
    "status": "success",
    "data": [
        {
            "id": 1,
            "agent_id": 101,
            "total_calls": 4,
            "deals_made": 2,
            "booked_calls": "1",
            "average_call_duration": "3.5",
            "created_at": "2024-08-30T14:00:00Z"
        }
        // More logs
    ]
}
### end Response:





### GET /api/targets-achievements
**Description**: Processes user queries and returns responses.

**Request**:
{
"agent_id" :  "(optional, integer)"
"time"     :  "(optional, H:m:s )"
"day"      :  "(optional, D )"
"month"    :  "(optional, M )"
"year"     :  "(optional, Y )"
}


### Response:
{
    "status": "success",
    "data": [
        {
            "id": 1,
            "agent_id": 101,
            "target": 100,
            "achieved": 80
        }
        // More data
    ]
}
### end Response:
