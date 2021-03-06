define({ "api": [
  {
    "type": "post",
    "url": "http://line-matching.dev.bap.jp/api/v1/ecategories",
    "title": "CreatEventCategory",
    "name": "CreateEventCategory",
    "group": "EventCategory",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "name",
            "description": "<p>Name eventCategory</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "status",
            "description": "<p>Status Response</p>"
          },
          {
            "group": "Success 200",
            "type": "Object",
            "optional": false,
            "field": "data",
            "description": "<p>Data Response</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "message",
            "description": "<p>Message Response</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "error",
            "description": "<p>Error of request</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Response:",
          "content": "{\n\"status\": 201,\n\"data\": {\n\"name\": \"Hayppy News Years\",\n\"status\": 1,\n\"updated_at\": \"2016-10-03 02:54:59\",\n\"created_at\": \"2016-10-03 02:54:59\",\n\"id\": 1\n},\n\"message\": \"Succesfully.\",\n\"error\": 0\n}\n}",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "./app/Http/Controllers/Api/EventCategoriesController.php",
    "groupTitle": "EventCategory"
  },
  {
    "type": "delete",
    "url": "http://line-matching.dev.bap.jp/api/v1/ecategories/{id}",
    "title": "Delete EventCategory",
    "name": "Delete_EventCategory",
    "group": "EventCategory",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "integer",
            "optional": false,
            "field": "EventCategiry_id",
            "description": "<p>ID EventCategory</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "status",
            "description": "<p>Status Response</p>"
          },
          {
            "group": "Success 200",
            "type": "Object",
            "optional": false,
            "field": "date",
            "description": "<p>Date Response</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "message",
            "description": "<p>Message Response</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "error",
            "description": "<p>Error of request</p>"
          }
        ]
      }
    },
    "examples": [
      {
        "title": "Response:",
        "content": "{    *  \"status\": 200,\n\"data\": true,\n \"message\": \"Succesfully.\",\n \"error\": null\n}",
        "type": "json"
      }
    ],
    "version": "0.0.0",
    "filename": "./app/Http/Controllers/Api/EventCategoriesController.php",
    "groupTitle": "EventCategory"
  },
  {
    "type": "put",
    "url": "http://line-matching.dev.bap.jp/api/v1/ecategories/{id}",
    "title": "Update EventCategory",
    "name": "Update_EventCategory",
    "group": "EventCategory",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "string",
            "optional": false,
            "field": "status",
            "description": "<p>Status</p>"
          },
          {
            "group": "Parameter",
            "type": "string",
            "optional": false,
            "field": "name",
            "description": "<p>Name EventCategory</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "status",
            "description": "<p>Status Reponse</p>"
          },
          {
            "group": "Success 200",
            "type": "Object",
            "optional": false,
            "field": "data",
            "description": "<p>Data Reponse</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "message",
            "description": "<p>Message Response</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "error",
            "description": "<p>Error of request</p>"
          }
        ]
      }
    },
    "examples": [
      {
        "title": "Response:",
        "content": "{\n\"status\": 201,\n\"data\": {\n\"id\": 1,\n\"name\": \"check_event\",\n\"status\": \"1\",\n\"created_at\": \"2016-10-03 02:54:59\",\n\"updated_at\": \"2016-10-03 03:02:23\"\n},\n\"message\": \"Succesfully.\",\n\"error\": 0\n}",
        "type": "json"
      }
    ],
    "version": "0.0.0",
    "filename": "./app/Http/Controllers/Api/EventCategoriesController.php",
    "groupTitle": "EventCategory"
  },
  {
    "type": "get",
    "url": "http://line-matching.dev.bap.jp/api/v1/ecategories/{id}",
    "title": "GetDetailEventCategory",
    "name": "getDetailCategory",
    "group": "EventCategory",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "integer",
            "optional": false,
            "field": "id_eventcategory",
            "description": "<p>ID_EventCategoy</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "status",
            "description": "<p>Status Response</p>"
          },
          {
            "group": "Success 200",
            "type": "Oject",
            "optional": false,
            "field": "data",
            "description": "<p>Data Response</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "message",
            "description": "<p>Message Response</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "error",
            "description": "<p>Error of request</p>"
          }
        ]
      }
    },
    "examples": [
      {
        "title": "Response:",
        "content": "{\n\"status\": 200,\n\"data\": {\n\"id\": 22,\n\"name\": \"check_event\",\n\"status\": \"1\",\n\"created_at\": \"2016-09-20 07:00:09\",\n\"updated_at\": \"2016-09-28 03:04:19\"\n},\n\"message\": \"Succesfully.\",\n\"error\": null\n}",
        "type": "json"
      }
    ],
    "version": "0.0.0",
    "filename": "./app/Http/Controllers/Api/EventCategoriesController.php",
    "groupTitle": "EventCategory"
  },
  {
    "type": "get",
    "url": "http://line-matching.dev.bap.jp/api/v1/ecategories",
    "title": "ListEventCategory",
    "name": "getList",
    "group": "EventCategory",
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "status",
            "description": "<p>Status Response</p>"
          },
          {
            "group": "Success 200",
            "type": "Object",
            "optional": false,
            "field": "date",
            "description": "<p>Date Response</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "message",
            "description": "<p>Message Response</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "error",
            "description": "<p>Error of request</p>"
          }
        ]
      }
    },
    "examples": [
      {
        "title": "Response:",
        "content": "{\n\"status\": 200,\n\"data\": {\n\"total\": 22,\n\"per_page\": 10,\n\"current_page\": 1,\n\"last_page\": 3,\n\"next_page_url\": \"http://line-matching.dev.bap.jp/api/v1/ecategories?page=2\",\n\"prev_page_url\": null,\n\"from\": 1,\n\"to\": 10,\n\"data\": [\n {\n \"id\": 8,\n \"name\": \"die\",\n \"status\": \"1\",\n \"created_at\": \"2016-09-19 09:10:37\",\n \"updated_at\": \"2016-09-19 09:10:37\"\n },   \n {\n \"id\": 19,\n \"name\": \"bycial\",\n \"status\": \"1\",\n \"created_at\": \"2016-09-20 06:53:21\",\n \"updated_at\": \"2016-09-20 06:53:21\"\n }\n ]\n },\n\"message\": \"Succesfully.\",\n\"error\": null\n}",
        "type": "json"
      }
    ],
    "version": "0.0.0",
    "filename": "./app/Http/Controllers/Api/EventCategoriesController.php",
    "groupTitle": "EventCategory"
  },
  {
    "type": "post",
    "url": "http://line-matching.dev.bap.jp/api/v1/events",
    "title": "CreatEvent",
    "name": "CreatEvent",
    "group": "Event",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "integer",
            "optional": false,
            "field": "user_id",
            "description": "<p>ID-User</p>"
          },
          {
            "group": "Parameter",
            "type": "string",
            "optional": false,
            "field": "name",
            "description": "<p>Name Event</p>"
          },
          {
            "group": "Parameter",
            "type": "string",
            "optional": false,
            "field": "description",
            "description": "<p>Description_Event</p>"
          },
          {
            "group": "Parameter",
            "type": "string",
            "optional": false,
            "field": "address",
            "description": "<p>Address_Event</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "user_max",
            "description": "<p>User_max_Event</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "cat_id",
            "description": "<p>ID_category</p>"
          },
          {
            "group": "Parameter",
            "type": "string",
            "optional": false,
            "field": "images",
            "description": "<p>Images_Event</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "long",
            "description": "<p>Latitude</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "lag",
            "description": "<p>Longitude</p>"
          },
          {
            "group": "Parameter",
            "type": "string",
            "optional": false,
            "field": "status",
            "description": "<p>Status_Event</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "status",
            "description": "<p>Status Response</p>"
          },
          {
            "group": "Success 200",
            "type": "Object",
            "optional": false,
            "field": "data",
            "description": "<p>Event_Data</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "message",
            "description": "<p>Message Response</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "error",
            "description": "<p>Error of request</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Response",
          "content": "{\n\"status\": 201,\n\"data\": {\n\"name\": \"SeaGame\",\n\"description\": \"Soccer, tennis\",\n\"address\": \"105 Nguyễn Hữu Thọ, Hồ Chí Minh, Việt Nam\",\n\"user_max\": \"50\",\n\"cat_id\": \"1\",\n\"long\": \"108.220808\",\n\"lag\": \"16.049223\",\n\"status\": 1,\n\"user_id\": 1,\n\"group_id\": \"1\",\n\"updated_at\": \"2016-10-03 02:07:45\",\n\"created_at\": \"2016-10-03 02:07:45\",\n\"id\": 5,\n\"images\": [\n{\n\"origin\": \"uploads/images/event/origin/5-147546046523uKCJyuELH4q2gj.jpg\",\n\"thumb\": \"uploads/images/event/thumb/5-147546046523uKCJyuELH4q2gj.jpg\"\n}\n]\n},\n\"message\": \"Succesfully.\",\n \"error\": 0\n *}",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "./app/Http/Controllers/Api/EventsController.php",
    "groupTitle": "Event"
  },
  {
    "type": "post",
    "url": "http://line-matching.dev.bap.jp/api/v1/prevents",
    "title": "CreatEventPrPoint",
    "name": "CreatEventPrPoint",
    "group": "Event",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "string",
            "optional": false,
            "field": "images",
            "description": "<p>Images of EventPrPoint</p>"
          },
          {
            "group": "Parameter",
            "type": "string",
            "optional": false,
            "field": "content",
            "description": "<p>Content of EventPrPoint</p>"
          },
          {
            "group": "Parameter",
            "type": "integer",
            "optional": false,
            "field": "event_id",
            "description": "<p>ID_Event</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "status",
            "description": "<p>Status Response</p>"
          },
          {
            "group": "Success 200",
            "type": "Object",
            "optional": false,
            "field": "date",
            "description": "<p>Date Response</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "message",
            "description": "<p>Message Response</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "error",
            "description": "<p>Error of request</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Response",
          "content": "{\n\"status\": 201,\n\"data\": {\n\"event_id\": 1,\n\"content\": \"Quảng cáo Nhà Hàng\",\n\"created_at\": \"2016-10-03 04:02:52\",\n\"id\": 4,\n\"images\": [\n{\n\"origin\": \"http://line-matching.dev.bap.jp/uploads/images/prpoint/origin/4-14754673726UJOqRPC0ErVRMJK.jpg\",\n\"thumb\": \"http://line-matching.dev.bap.jp/uploads/images/prpoint/thumb/4-14754673726UJOqRPC0ErVRMJK.jpg\"\n }\n]\n},\n\"message\": \"Succesfully.\",\n\"error\": 0\n}",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "./app/Http/Controllers/Api/PrPointController.php",
    "groupTitle": "Event"
  },
  {
    "type": "post",
    "url": "http://line-matching.dev.bap.jp/api/v1/events/{id}/join",
    "title": "CreatJoinEvent",
    "name": "CreatJoinEvent",
    "group": "Event",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "integer",
            "optional": false,
            "field": "id_event",
            "description": "<p>ID-Event</p>"
          },
          {
            "group": "Parameter",
            "type": "integer",
            "optional": false,
            "field": "is_join",
            "description": "<p>Stustus|1:join|0:leave|-2:block</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "status",
            "description": "<p>Status Response</p>"
          },
          {
            "group": "Success 200",
            "type": "Object",
            "optional": false,
            "field": "data",
            "description": "<p>Data</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "Message",
            "description": "<p>Response</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "Error",
            "description": "<p>of Request</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Response ",
          "content": "{\n\"status\": 201,\n\"data\": null,\n\"message\": \"Succesfully.\",\n\"error\": 0\n}",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "./app/Http/Controllers/Api/EventsController.php",
    "groupTitle": "Event"
  },
  {
    "type": "delete",
    "url": "http://line-matching.dev.bap.jp/api/v1/events/{id}",
    "title": "DeleteEvent",
    "name": "DeleteEvent",
    "group": "Event",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "integer",
            "optional": false,
            "field": "id_event",
            "description": "<p>ID_Event</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "status",
            "description": "<p>Status Response</p>"
          },
          {
            "group": "Success 200",
            "type": "Object",
            "optional": false,
            "field": "data",
            "description": "<p>EventData</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "message",
            "description": "<p>Message Response</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "Error",
            "description": "<p>of Request</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Response",
          "content": " {\n   \"status\": 200,\n\"data\": true,\n\"message\": \"Succesfully.\",\n\"error\": null\n   }",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "./app/Http/Controllers/Api/GroupUsersMapsController.php",
    "groupTitle": "Event"
  },
  {
    "type": "delete",
    "url": "http://line-matching.dev.bap.jp/api/v1/events/{id}",
    "title": "DeleteEvent",
    "name": "DeleteEvent",
    "group": "Event",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "integer",
            "optional": false,
            "field": "id_event",
            "description": "<p>ID_Event</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "status",
            "description": "<p>Status Response</p>"
          },
          {
            "group": "Success 200",
            "type": "Object",
            "optional": false,
            "field": "data",
            "description": "<p>EventData</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "message",
            "description": "<p>Message Response</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "Error",
            "description": "<p>of Request</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Response",
          "content": " {\n   \"status\": 200,\n\"data\": true,\n\"message\": \"Succesfully.\",\n\"error\": null\n   }",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "./app/Http/Controllers/Api/EventsController.php",
    "groupTitle": "Event"
  },
  {
    "type": "delete",
    "url": "http://line-matching.dev.bap.jp/api/v1/prevents/{id}",
    "title": "DeleteEventPrPoint",
    "name": "DeleteEventPrPoint",
    "group": "Event",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "integer",
            "optional": false,
            "field": "id_events_pr_points",
            "description": "<p>ID-events_pr_points</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "status",
            "description": "<p>Status Response</p>"
          },
          {
            "group": "Success 200",
            "type": "Object",
            "optional": false,
            "field": "data",
            "description": "<p>EventData</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "message",
            "description": "<p>Message Response</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "Error",
            "description": "<p>of Request</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Response",
          "content": "{\n\"status\": 200,\n\"data\": true,\n\"message\": \"Succesfully.\",\n\"error\": null\n}",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "./app/Http/Controllers/Api/PrPointController.php",
    "groupTitle": "Event"
  },
  {
    "type": "get",
    "url": "http://line-matching.dev.bap.jp/api/v1/events/{id}",
    "title": "GetDetailEvent",
    "name": "GetDetailEvent",
    "group": "Event",
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "status",
            "description": "<p>Status Response</p>"
          },
          {
            "group": "Success 200",
            "type": "Object",
            "optional": false,
            "field": "data",
            "description": "<p>Data_Event</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "Message",
            "description": "<p>Response</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "Error",
            "description": "<p>of request</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Response",
          "content": "{\n\"status\": 200,\n\"data\": {\n\"id\": 1,\n\"cat_id\": \"1\",\n\"name\": \"Happy New Year\",\n\"address\": \"109 Nguyễn Hữu Thọ, Hồ Chí Minh, Việt Nam\",\n\"description\": \"25.1214581\",\n\"images\": [\n {\n \"origin\": \"uploads/images/event/origin/1-1475312974iupLRHMHScNP8I86.jpg\",\n \"thumb\": \"uploads/images/event/thumb/1-1475312974iupLRHMHScNP8I86.jpg\"\n }\n],\n\"user_id\": 0,\n\"long\": \"12.25365000\",\n\"lag\": \"25.12145810\",\n\"group_id\": \"0\",\n\"status\": \"1\",\n\"date_start\": \"0000-00-00 00:00:00\",\n\"date_end\": \"0000-00-00 00:00:00\",\n\"user_max\": \"50\",\n\"created_at\": \"2016-10-01 09:09:33\",\n\"updated_at\": \"2016-10-01 09:38:16\"\n},\n\"message\": \"Succesfully.\",\n\"error\": null\n}",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "./app/Http/Controllers/Api/EventsController.php",
    "groupTitle": "Event"
  },
  {
    "type": "get",
    "url": "http://line-matching.dev.bap.jp/api/v1/prevents/{id}",
    "title": "GetDetailEventPrPoint",
    "name": "GetDetailEventPrPoint",
    "group": "Event",
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "status",
            "description": "<p>Status Response</p>"
          },
          {
            "group": "Success 200",
            "type": "Object",
            "optional": false,
            "field": "data",
            "description": "<p>Data_Event</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "Message",
            "description": "<p>Response</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "Error",
            "description": "<p>of request</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Response",
          "content": "{\n\"status\": 200,\n\"data\": {\n\"id\": 2,\n\"event_id\": 2,\n\"content\": \"Store Telephone\",\n\"images\": [\n{\n\"origin\": \"http://line-matching.dev.bap.jp/uploads/images/prpoint/origin/2-1475317232ymZDa1oT5epxaeqk.jpg\",\n\"thumb\": \"http://line-matching.dev.bap.jp/uploads/images/prpoint/thumb/2-1475317232ymZDa1oT5epxaeqk.jpg\"\n}\n],\n\"created_at\": \"2016-10-01 10:20:32\",\n\"updated_at\": \"2016-10-01 10:20:32\"\n},\n\"message\": \"Succesfully.\",\n\"error\": null\n}",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "./app/Http/Controllers/Api/PrPointController.php",
    "groupTitle": "Event"
  },
  {
    "type": "delete",
    "url": "http://line-matching.dev.bap.jp/api/v1/events/join/{id}",
    "title": "LeaveEvent",
    "name": "LeaveEvent",
    "group": "Event",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "integer",
            "optional": false,
            "field": "id_events_users_maps",
            "description": "<p>ID_events_users_maps</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "status",
            "description": "<p>Status Response</p>"
          },
          {
            "group": "Success 200",
            "type": "Object",
            "optional": false,
            "field": "data",
            "description": "<p>EventData</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "message",
            "description": "<p>Message Response</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "Error",
            "description": "<p>of Request</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Response",
          "content": "{\n \"status\": 200,\n \"data\": true,\n \"message\": \"Succesfully.\",\n\"error\": null\n }",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "./app/Http/Controllers/Api/EventsController.php",
    "groupTitle": "Event"
  },
  {
    "type": "get",
    "url": "http://line-matching.dev.bap.jp/api/v1/events",
    "title": "ListEvent",
    "name": "ListEvent",
    "group": "Event",
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "status",
            "description": "<p>Status Response</p>"
          },
          {
            "group": "Success 200",
            "type": "Object",
            "optional": false,
            "field": "data",
            "description": "<p>Event_Data</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "message",
            "description": "<p>Message Response</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Response",
          "content": "{\n    \"status\": 200,\n    \"data\": {\n\"total\": 33,\n\"per_page\": 10,\n\"current_page\": 1,\n\"last_page\": 4,\n\"next_page_url\": \"http://line-matching.dev.bap.jp/api/v1/events?page=2\",\n\"prev_page_url\": null,\n\"from\": 1,\n\"to\": 10,\n\"data\": [\n{\n\"id\": 1,\n\"cat_id\": \"4\",\n\"name\": \"birth day\",\n\"address\": \"Cẩm Lệ\",\n\"description\": \"Tiệc sinh nhật \",\n\"images\": [\n{\n\"origin\": \"uploads/images/event/origin/5-147546046523uKCJyuELH4q2gj.jpg\",\n\"thumb\": \"uploads/images/event/thumb/5-147546046523uKCJyuELH4q2gj.jpg\"\n}\n],\n\"long\": \"108.23129100\",\n\"lat\": \"16.04066400\",\n\"group_id\": \"3\",\n\"status\": \"1\",\n\"date_start\": \"2016-10-06 00:00:00\",\n\"date_end\": \"0000-00-00 00:00:00\",\n\"user_max\": \"0\",\n\"created_at\": \"2016-10-06 13:33:32\",\n\"updated_at\": \"2016-10-06 13:33:32\"\n},\n{\n\"id\": 2,\n\"cat_id\": \"4\",\n\"name\": \"Thi chim canh\",\n\"address\": \"109 Nguyễn Hữu Thọ, Hồ Chí Minh, Việt Nam\",\n\"description\": \"Xem những con chim chơi hay nhất\",\n\"images\": [\n{\n\"origin\": \"uploads/images/event/origin/5-147546046523uKCJyuELH4q2gj.jpg\",\n\"thumb\": \"uploads/images/event/thumb/5-147546046523uKCJyuELH4q2gj.jpg\"\n}\n],\n\"user_id\": 3,\n\"long\": \"12.25365000\",\n\"lat\": \"25.12145810\",\n\"group_id\": \"0\",\n\"status\": \"1\",\n\"date_start\": \"2016-10-20 00:00:00\",\n\"date_end\": \"0000-00-00 00:00:00\",\n\"user_max\": \"0\",\n\"created_at\": \"2016-10-06 13:33:32\",\n\"updated_at\": \"2016-10-06 13:33:32\"\n}, \n{\n\"id\": 5,\n\"cat_id\": \"1\",\n\"name\": \"SeaGame\",\n\"address\": \"105 Nguyễn Hữu Thọ, Hồ Chí Minh, Việt Nam\",\n\"description\": \"Soccer, tennis\",\n\"images\": [\n{\n\"origin\": \"http://line-matching.dev.bap.jp/uploads/images/event/origin/17-1476264116Nauzhcx5WOInr19D.jpg\",\n\"thumb\": \"http://line-matching.dev.bap.jp/uploads/images/event/thumb/17-1476264116Nauzhcx5WOInr19D.jpg\"\n}\n],\n\"user_id\": 1,\n\"long\": \"108.22080800\",\n\"lat\": \"16.04922300\",\n\"group_id\": \"1\",\n\"status\": \"1\",\n\"date_start\": \"0000-00-00 00:00:00\",\n\"date_end\": \"0000-00-00 00:00:00\",\n\"user_max\": \"50\",\n\"created_at\": \"2016-10-12 16:21:39\",\n\"updated_at\": \"2016-10-12 09:21:56\"\n}\n]\n},\n\"message\": \"Succesfully.\",\n\"error\": null\n}",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "./app/Http/Controllers/Api/EventsController.php",
    "groupTitle": "Event"
  },
  {
    "type": "get",
    "url": "http://line-matching.dev.bap.jp/api/v1/prevents",
    "title": "ListEventPrPoint",
    "name": "ListEventPrPoint",
    "group": "Event",
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "status",
            "description": "<p>Status Response</p>"
          },
          {
            "group": "Success 200",
            "type": "Object",
            "optional": false,
            "field": "data",
            "description": "<p>EventPrPoiny_Data</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "message",
            "description": "<p>Message Response</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Response",
          "content": "{\n\"status\": 200,\n\"data\": {\n\"total\": 6,\n\"per_page\": 10,\n\"current_page\": 1,\n\"last_page\": 1,\n\"next_page_url\": null,\n\"prev_page_url\": null,\n\"from\": 1,\n\"to\": 6,\n\"data\": [\n{\n\"id\": 1,\n\"event_id\": 3,\n\"content\": \"Quảng cáo Nhà Hàng\",\n\"images\": [\n{\n\"origin\": \"http://line-matching.dev.bap.jp/uploads/images/prpoint/origin/13-1476167829PIqAofppp9PTaRf7.jpg\",\n\"thumb\": \"http://line-matching.dev.bap.jp/uploads/images/prpoint/thumb/13-1476167829PIqAofppp9PTaRf7.jpg\"\n}\n],\n\"created_at\": \"2016-10-11 06:37:09\",\n\"updated_at\": \"2016-10-11 06:37:09\"\n},\n{\n\"id\": 6,\n\"event_id\": 6,\n\"content\": \"Content healthy, entertament\",\n\"images\": [\n{\n\"origin\": \"http://line-matching.dev.bap.jp/uploads/images/prpoint/origin/14-1476167833WhgP0NLojINaiaJ0.jpg\",\n\"thumb\": \"http://line-matching.dev.bap.jp/uploads/images/prpoint/thumb/14-1476167833WhgP0NLojINaiaJ0.jpg\"\n}\n],\n\"created_at\": \"2016-10-11 06:37:13\",\n\"updated_at\": \"2016-10-11 06:37:13\"\n}\n]\n},\n\"message\": \"Succesfully.\",\n\"error\": null\n}",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "./app/Http/Controllers/Api/PrPointController.php",
    "groupTitle": "Event"
  },
  {
    "type": "post",
    "url": "http://line-matching.dev.bap.jp/api/v1/events/{id}",
    "title": "UpdateEvent",
    "group": "Event",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "string",
            "optional": false,
            "field": "name",
            "description": "<p>Name Event</p>"
          },
          {
            "group": "Parameter",
            "type": "string",
            "optional": false,
            "field": "description",
            "description": "<p>Description_Event</p>"
          },
          {
            "group": "Parameter",
            "type": "string",
            "optional": false,
            "field": "address",
            "description": "<p>Address_Event</p>"
          },
          {
            "group": "Parameter",
            "type": "string",
            "optional": false,
            "field": "images",
            "description": "<p>Images_Event</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "long",
            "description": "<p>Latitude</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "lag",
            "description": "<p>Longitude</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "status",
            "description": "<p>Status Response</p>"
          },
          {
            "group": "Success 200",
            "type": "Object",
            "optional": false,
            "field": "data",
            "description": "<p>Event_Data</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "message",
            "description": "<p>Message Response</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "error",
            "description": "<p>Error of request</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Response",
          "content": "{\n\"status\": 201,\n\"data\": {\n\"id\": 1,\n\"cat_id\": \"1\",\n\"name\": \"Happy New Year\",\n\"address\": \"109 Nguyễn Hữu Thọ, Hồ Chí Minh, Việt Nam\",\n\"description\": \"25.1214581\",\n \"images\": [\n      {\n          \"origin\": \"uploads/images/event/origin/1-1475312974iupLRHMHScNP8I86.jpg\",\n          \"thumb\": \"uploads/images/event/thumb/1-1475312974iupLRHMHScNP8I86.jpg\"\n      }\n  ],\n\"user_id\": 0,\n\"long\": \"12.25365000\",\n\"lag\": \"25.12145810\",\n\"group_id\": \"0\",\n\"status\": \"1\",\n\"date_start\": \"0000-00-00 00:00:00\",\n\"date_end\": \"0000-00-00 00:00:00\",\n\"user_max\": \"50\",\n\"created_at\": \"2016-10-01 09:09:33\",\n\"updated_at\": \"2016-10-01 09:38:16\"\n },\n \"message\": \"Succesfully.\",\n \"error\": 0\n }",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "./app/Http/Controllers/Api/EventsController.php",
    "groupTitle": "Event",
    "name": "PostHttpLineMatchingDevBapJpApiV1EventsId"
  },
  {
    "type": "post",
    "url": "http://line-matching.dev.bap.jp/api/v1/prevents/{id}",
    "title": "UpdateEventPrPoint",
    "name": "UpdateEventPrPoint",
    "group": "Event",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "integer",
            "optional": false,
            "field": "id_events_pr_points",
            "description": "<p>ID-events_pr_points</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "status",
            "description": "<p>Status Response</p>"
          },
          {
            "group": "Success 200",
            "type": "Object",
            "optional": false,
            "field": "date",
            "description": "<p>Date Response</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "message",
            "description": "<p>Message Response</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "error",
            "description": "<p>Error of request</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Response",
          "content": "{\n\"status\": 201,\n\"data\": {\n\"id\": 1,\n\"event_id\": 1,\n\"content\": \"Quảng cáo Nhà Hàng\",\n\"images\": [\n{\n\"origin\": \"http://line-matching.dev.bap.jp/uploads/images/prpoint/origin/1-1475317169BOYNeuo5NYWGVKHx.jpg\",\n\"thumb\": \"http://line-matching.dev.bap.jp/uploads/images/prpoint/thumb/1-1475317169BOYNeuo5NYWGVKHx.jpg\"\n }\n],\n\"created_at\": \"2016-10-01 10:19:29\",\n\"updated_at\": \"2016-10-01 10:19:29\"\n },\n\"message\": \"Succesfully.\",\n\"error\": 0\n   }",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "./app/Http/Controllers/Api/PrPointController.php",
    "groupTitle": "Event"
  },
  {
    "type": "get",
    "url": "api/v1/took-place-events",
    "title": "Get Events Took Place",
    "name": "Get_Events_Took_Place",
    "version": "1.0.0",
    "group": "Events",
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "status",
            "description": "<p>Status return</p>"
          },
          {
            "group": "Success 200",
            "type": "Object",
            "optional": false,
            "field": "data",
            "description": "<p>Data return</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Message return</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "error",
            "description": "<p>Error return</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Response:",
          "content": "{\n\"status\": 200,\n\"data\": [\n {\n\"id\": 3,\n\"date\": \"2016-10-05 00:00:00\",\n\"name\": \"Open soon restaurant 2\",\n\"cat_id\": \"20\"\n},\n {\n\"id\": 7,\n\"date\": \"2016-10-06 00:00:00\",\n\"name\": \"birth day\",\n\"cat_id\": \"4\"\n }\n ],\n\"message\": \"Succesfully.\",\n\"error\": null\n }",
          "type": "json"
        }
      ]
    },
    "filename": "app/Http/Controllers/Api/EventsController.php",
    "groupTitle": "Events"
  },
  {
    "type": "get",
    "url": "api/v1/events-plan",
    "title": "Get Events will Take Place",
    "name": "Get_Events_will_Take_Place",
    "version": "1.0.0",
    "group": "Events",
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "status",
            "description": "<p>Status return</p>"
          },
          {
            "group": "Success 200",
            "type": "Object",
            "optional": false,
            "field": "data",
            "description": "<p>Data return</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Message return</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "error",
            "description": "<p>Error return</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Response:",
          "content": "{\n\"status\": 200,\n\"data\": {\n\"2\": {\n\"id\": 8,\n\"date\": \"2016-10-20 00:00:00\",\n\"name\": \"event 1\",\n\"cat_id\": \"4\"\n }\n},\n\"message\": \"Succesfully.\",\n\"error\": null\n}",
          "type": "json"
        }
      ]
    },
    "filename": "app/Http/Controllers/Api/EventsController.php",
    "groupTitle": "Events"
  },
  {
    "type": "get",
    "url": "api/v1/related-event/:id",
    "title": "Get Related Events",
    "name": "Get_Related_Events",
    "version": "1.0.0",
    "group": "Events",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Integer",
            "optional": false,
            "field": "event",
            "description": "<p>id Event Id From event id, find group id and category id, continue get event have the same group joined and category</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "status",
            "description": "<p>Status return</p>"
          },
          {
            "group": "Success 200",
            "type": "Object",
            "optional": false,
            "field": "data",
            "description": "<p>Data return</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Message return</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "error",
            "description": "<p>Error return</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Response:",
          "content": "{\n\"status\": 201,\n\"data\": {\n\"related_event\": [\n {\n\"name\": \"Happy Birthday 1\",\n\"images\": [\n {\n\"origin\": \"uploads/images/event/origin/2-1475313359Nbg57HO35W1wnCbU.jpg\",\n\"thumb\": \"uploads/images/event/thumb/2-1475313359Nbg57HO35W1wnCbU.jpg\"\n }\n ]\n  },\n {\n\"name\": \"Apec\",\n\"images\": [\n  {\n\"origin\": \"uploads/images/event/origin/5-147546046523uKCJyuELH4q2gj.jpg\",\n\"thumb\": \"uploads/images/event/thumb/5-147546046523uKCJyuELH4q2gj.jpg\"\n  }\n  ]\n]\n },\n\"message\": \"Succesfully.\",\n\n}",
          "type": "json"
        }
      ]
    },
    "filename": "./app/Http/Controllers/Api/EventsController.php",
    "groupTitle": "Events"
  },
  {
    "type": "put",
    "url": "api.group.put.create",
    "title": "ChangeGroup",
    "name": "ChangeGroup",
    "group": "Group",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "string",
            "optional": false,
            "field": "name",
            "description": "<p>Name of Group</p>"
          },
          {
            "group": "Parameter",
            "type": "integer",
            "optional": false,
            "field": "leader_max",
            "description": "<p>The maximum number people of Group</p>"
          },
          {
            "group": "Parameter",
            "type": "integer",
            "optional": false,
            "field": "user_max",
            "description": "<p>The maximum number people of Group</p>"
          },
          {
            "group": "Parameter",
            "type": "string",
            "optional": false,
            "field": "description",
            "description": "<p>Description of Group</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "long",
            "description": "<p>Latitude</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "lag",
            "description": "<p>Longitude</p>"
          },
          {
            "group": "Parameter",
            "type": "integer",
            "optional": false,
            "field": "user_id",
            "description": "<p>ID_User</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "group_id",
            "description": "<p>ID-Group</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "name",
            "description": "<p>Name of Group</p>"
          },
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "leader_max",
            "description": "<p>The maximum number people of Group</p>"
          },
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "user_max",
            "description": "<p>The maximum number people of Group</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "description",
            "description": "<p>Description of Group</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "long",
            "description": "<p>Latitude</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "lag",
            "description": "<p>Longitude</p>"
          },
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "user_id",
            "description": "<p>ID_User</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Response:",
          "content": " {\n\"status\": 201,\n\"data\": {\n\"id\": 68,\n\"name\": \"Group 2\",\n\"images\": null,\n\"leader_max\": \"50\",\n\"user_max\": \"100\",\n\"user_id\": 1,\n\"description\": \"Big Group\",\n\"status\": \"30\",\n\"lag\": \"0.00000000\",\n\"long\": \"0.00000000\",\n\"created_at\": \"2016-09-23 08:22:38\",\n\"updated_at\": \"2016-09-28 08:11:04\"\n},\n\"message\": \"Succesfully.\",\n\"error\": 0",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "./app/Http/Controllers/Api/GroupsController.php",
    "groupTitle": "Group"
  },
  {
    "type": "post",
    "url": "http://line-matching.dev.bap.jp/api/v1/groups/{id}/join",
    "title": "CreateJoinGroup",
    "name": "CreatJoinGroup",
    "group": "Group",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "integer",
            "optional": false,
            "field": "id_group",
            "description": "<p>ID_Group</p>"
          },
          {
            "group": "Parameter",
            "type": "integer",
            "optional": false,
            "field": "is_join",
            "description": "<p>Status 1:join | 0:leave | -2:block</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "status",
            "description": "<p>Status Response</p>"
          },
          {
            "group": "Success 200",
            "type": "Object",
            "optional": false,
            "field": "data",
            "description": "<p>Date Response</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "message",
            "description": "<p>status Response</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "error",
            "description": "<p>Error of request</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Response:",
          "content": "{\n\"status\": 201,\n\"data\": null,\n\"message\": \"Succesfully.\",\n\"error\": 0\n}",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "./app/Http/Controllers/Api/GroupsController.php",
    "groupTitle": "Group"
  },
  {
    "type": "delete",
    "url": "http://line-matching.dev.bap.jp/api/v1/groups/{id}",
    "title": "DeleteGroup",
    "name": "DeleteGroup",
    "group": "Group",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "integer",
            "optional": false,
            "field": "group_id",
            "description": "<p>ID Group</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "status",
            "description": "<p>Status Response</p>"
          },
          {
            "group": "Success 200",
            "type": "Object",
            "optional": false,
            "field": "date",
            "description": "<p>Date Response</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "message",
            "description": "<p>Message Response</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "error",
            "description": "<p>Error of request</p>"
          }
        ]
      }
    },
    "examples": [
      {
        "title": "Response:",
        "content": "{\n \"status\": 200,\n\"data\": true,\n \"message\": \"Succesfully.\",\n \"error\": null\n}",
        "type": "json"
      }
    ],
    "version": "0.0.0",
    "filename": "./app/Http/Controllers/Api/GroupsController.php",
    "groupTitle": "Group"
  },
  {
    "type": "delete",
    "url": "http://line-matching.dev.bap.jp/api/v1/groups/join/{id}",
    "title": "LeaveGroup",
    "name": "LeaveGroup",
    "group": "Group",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "integer",
            "optional": false,
            "field": "groups_users_maps",
            "description": "<p>ID-groups_users_maps</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "status",
            "description": "<p>Status Response</p>"
          },
          {
            "group": "Success 200",
            "type": "Object",
            "optional": false,
            "field": "data",
            "description": "<p>Date Response</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "message",
            "description": "<p>status Response</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "error",
            "description": "<p>Error of request</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Response:",
          "content": "{\n\"status\": 201,\n\"data\": true,\n\"message\": \"Succesfully.\",\n\"error\": 0\n}",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "./app/Http/Controllers/Api/GroupsController.php",
    "groupTitle": "Group"
  },
  {
    "type": "get",
    "url": "http://line-matching.dev.bap.jp/api/v1/groups",
    "title": "ListGroup",
    "name": "ListGroup",
    "group": "Group",
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "status",
            "description": "<p>Status Response</p>"
          },
          {
            "group": "Success 200",
            "type": "Object",
            "optional": false,
            "field": "data",
            "description": "<p>Data Response</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "message",
            "description": "<p>Message Response</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "error",
            "description": "<p>Error of request</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Response:",
          "content": "{\n\"status\": 200,\n\"data\": {\n\"total\": 33,\n\"per_page\": 10,\n\"current_page\": 1,\n\"last_page\": 4,\n\"next_page_url\": \"http://line-matching.dev.bap.jp/api/v1/groups?page=2\",\n\"prev_page_url\": null,\n\"from\": 1,\n\"to\": 10,\n\"data\": [\n       {\n\"id\": 3,\n\"cat_id\": \"1\",\n\"name\": \"Group Great\",\n\"images\": [\n{\n\"origin\": \"http://line-matching.dev.bap.jp/uploads/images/groups/origin/3-14755628190ctCsqlZa0RqZsnH.jpeg\",\n\"thumb\": \"http://line-matching.dev.bap.jp/uploads/images/groups/thumb/3-14755628190ctCsqlZa0RqZsnH.jpeg\"\n}\n],\n\"leader_max\": \"2\",\n\"user_max\": \"50\",\n\"user_id\": 1,\n\"description\": \"descripton of the group\",\n\"status\": \"50\",\n\"lat\": \"16.04922300\",\n\"long\": \"108.22080800\",\n\"created_at\": \"2016-10-11 17:15:54\",\n\"updated_at\": \"2016-10-11 02:00:28\"\n},\n{\n\"id\": 15,\n\"cat_id\": \"2\",\n\"name\": \"Group 9\",\n\"images\": [\n{\n\"origin\": \"http://line-matching.dev.bap.jp/uploads/images/groups/origin/15-1476153566doJqEawXIj6ShHFa.jpg\",\n\"thumb\": \"http://line-matching.dev.bap.jp/uploads/images/groups/thumb/15-1476153566doJqEawXIj6ShHFa.jpg\"\n}\n],\n\"leader_max\": \"50\",\n\"user_max\": \"40\",\n\"user_id\": 1,\n\"description\": \"descripton of the grouphj\",\n\"status\": \"1\",\n\"lat\": \"15.24554100\",\n\"long\": \"21.25400000\",\n\"created_at\": \"2016-10-11 15:47:04\",\n\"updated_at\": \"2016-10-11 02:39:26\"\n}\n]\n},\n\"message\": \"Succesfully.\",\n\"error\": null\n}",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "./app/Http/Controllers/Api/GroupsController.php",
    "groupTitle": "Group"
  },
  {
    "type": "get",
    "url": "http://line-matching.dev.bap.jp/api/v1/groups/{id}",
    "title": "getDetailGroup",
    "name": "getDetailGroup",
    "group": "Group",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "integer",
            "optional": false,
            "field": "id_group",
            "description": "<p>ID-Group</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "status",
            "description": "<p>Status Response</p>"
          },
          {
            "group": "Success 200",
            "type": "Object",
            "optional": false,
            "field": "data",
            "description": "<p>Date Response</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "message",
            "description": "<p>Message Response</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "error",
            "description": "<p>Error of request</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Response:",
          "content": "{\n\"status\": 200,\n\"data\": {\n\"id\": 2,\n\"name\": \"Group great\",\n\"images\": [\n{\n\"origin\": \"uploads/images/groups/origin/2-1475464541VXBznZso1uvK6oyn.jpg\",\n\"thumb\": \"uploads/images/groups/thumb/2-1475464541VXBznZso1uvK6oyn.jpg\"\n}\n],\n\"leader_max\": \"50\",\n\"user_max\": \"50\",\n\"user_id\": 1,\n\"description\": \"descripton of the group\",\n\"status\": \"1\",\n\"lag\": \"15.24554100\",\n\"long\": \"21.25400000\",\n\"created_at\": \"2016-10-03 10:15:29\",\n*\"updated_at\": \"2016-10-03 03:15:41\"\n},\n\"message\": \"Succesfully.\",\n\"error\": null\n}",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "./app/Http/Controllers/Api/GroupsController.php",
    "groupTitle": "Group"
  },
  {
    "type": "get",
    "url": "http://line-matching.dev.bap.jp/api/v1/mypage/event{id}",
    "title": "ListDetailEvent",
    "name": "ListDetailEvent",
    "group": "MyPage",
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "status",
            "description": "<p>Status Response</p>"
          },
          {
            "group": "Success 200",
            "type": "Object",
            "optional": false,
            "field": "data",
            "description": "<p>Data Response</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "message",
            "description": "<p>Message Response</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "error",
            "description": "<p>Error of request</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Response",
          "content": "{\n\"status\": 200,\n\"data\": {\n\"id\": 2,\n\"cat_id\": \"2\",\n\"name\": \"Happy Birthday 1\",\n\"address\": \"504-508 Ông Ích Khiêm, Hải Châu 2, Đà Nẵng, Việt Nam\",\n\"description\": \"Birth good\",\n\"images\": [\n{\n\"origin\": \"uploads/images/event/origin/2-1475313359Nbg57HO35W1wnCbU.jpg\",\n\"thumb\": \"uploads/images/event/thumb/2-1475313359Nbg57HO35W1wnCbU.jpg\"\n}\n],\n\"user_id\": 0,\n\"long\": \"108.21574200\",\n\"lat\": \"16.06317400\",\n\"group_id\": \"2\",\n\"status\": \"0\",\n\"date_start\": \"0000-00-00 00:00:00\",\n\"date_end\": \"0000-00-00 00:00:00\",\n\"user_max\": \"50\",\n\"created_at\": \"2016-10-01 09:15:59\",\n\"updated_at\": \"2016-10-01 09:16:00\"\n},\n\"message\": \"Succesfully.\",\n\"error\": null\n}",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "./app/Http/Controllers/Api/MyPageController.php",
    "groupTitle": "MyPage"
  },
  {
    "type": "get",
    "url": "http://line-matching.dev.bap.jp/api/v1/mypage/event",
    "title": "ListEvent",
    "name": "ListEvent",
    "group": "MyPage",
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "status",
            "description": "<p>Status Response</p>"
          },
          {
            "group": "Success 200",
            "type": "Object",
            "optional": false,
            "field": "data",
            "description": "<p>Data Response</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "message",
            "description": "<p>Message Response</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "error",
            "description": "<p>Error of request</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Response",
          "content": "{\n\"status\": 200,\n\"data\": [\n{\n\"group_id\": \"2\",\n\"images\": [\n{\n\"origin\": \"uploads/images/event/origin/2-1475313359Nbg57HO35W1wnCbU.jpg\",\n\"thumb\": \"uploads/images/event/thumb/2-1475313359Nbg57HO35W1wnCbU.jpg\"\n}\n],\n\"date_start\": \"0000-00-00 00:00:00\",\n\"name\": \"Happy Birthday 1\",\n\"user_max\": \"50\",\n\"id\": 2,\n\"cat_id\": \"2\",\n\"groups\": {\n\"id\": 2,\n},\n\"category\": null\n},\n{\n\"group_id\": \"3\",\n\"images\": [\n {\n\"origin\": \"uploads/images/event/origin/3-1475313633mr9nKJM0ane0pLUw.jpg\",\n\"thumb\": \"uploads/images/event/thumb/3-1475313633mr9nKJM0ane0pLUw.jpg\"\n}\n],\n\"date_start\": \"0000-00-00 00:00:00\",\n\"name\": \"Open soon restaurant 2\",\n\"user_max\": \"50\",\n\"id\": 3,\n\"cat_id\": \"20\",\n\"groups\": {\n\"id\": 3,\n\"name\": \"Group 3\"\n },\n\"category\": {\n\"id\": 3,\n\"name\": \"Sports, Fitness\"\n}\n}\n],\n\"message\": \"Succesfully.\",\n\"error\": null\n}",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "./app/Http/Controllers/Api/MyPageController.php",
    "groupTitle": "MyPage"
  },
  {
    "type": "get",
    "url": "http://line-matching.dev.bap.jp/api/v1/mypage",
    "title": "ListGroupAndEvent",
    "name": "ListGroupAndEvent",
    "group": "MyPage",
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "status",
            "description": "<p>Status Response</p>"
          },
          {
            "group": "Success 200",
            "type": "Object",
            "optional": false,
            "field": "data",
            "description": "<p>Data Response</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "message",
            "description": "<p>Message Response</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "error",
            "description": "<p>Error of request</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Response",
          "content": "{\n\"status\": 200,\n\"data\": [\n{\n\"images\": [\n{\n\"origin\": \"uploads/images/event/origin/5-147546046523uKCJyuELH4q2gj.jpg\",\n\"thumb\": \"uploads/images/event/thumb/5-147546046523uKCJyuELH4q2gj.jpg\"\n}\n],\n\"date_start\": \"2016-10-06 00:00:00\",\n\"name\": \"birth day\",\n\"user_max\": \"0\",\n\"id\": 1,\n\"is_leader\": 1,\n\"groups\": null,\n\"category\": null\n},\n{\n\"images\": [\n{\n\"origin\": \"uploads/images/event/origin/5-147546046523uKCJyuELH4q2gj.jpg\",\n\"thumb\": \"uploads/images/event/thumb/5-147546046523uKCJyuELH4q2gj.jpg\"\n}\n],\n\"date_start\": \"2016-10-20 00:00:00\",\n\"name\": \"Thi chim canh\",\n\"user_max\": \"0\",\n\"id\": 2,\n\"is_leader\": 1,\n\"groups\": null,\n\"category\": null\n},\n{\n\"images\": [\n{\n\"origin\": \"http://line-matching.dev.bap.jp/uploads/images/event/origin/17-1476264116Nauzhcx5WOInr19D.jpg\",\n\"thumb\": \"http://line-matching.dev.bap.jp/uploads/images/event/thumb/17-1476264116Nauzhcx5WOInr19D.jpg\"\n}\n],\n\"date_start\": \"0000-00-00 00:00:00\",\n\"name\": \"SeaGame\",\n\"user_max\": \"50\",\n\"id\": 5,\n\"is_leader\": 0,\n\"groups\": null,\n\"category\": {\n\"id\": 5,\n\"name\": \"Chat hobby\"\n}\n}\n],\n\"message\": \"Succesfully.\",\n\"error\": null\n}",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "./app/Http/Controllers/Api/MyPageController.php",
    "groupTitle": "MyPage"
  },
  {
    "type": "get",
    "url": "api/v1/banks",
    "title": "Get Banks",
    "name": "Get_Banks",
    "version": "1.0.0",
    "group": "Platform",
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "status",
            "description": "<p>Status return</p>"
          },
          {
            "group": "Success 200",
            "type": "Array",
            "optional": false,
            "field": "data",
            "description": "<p>Data return</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Message return</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "error",
            "description": "<p>Error return</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Response:",
          "content": "{\n\n }",
          "type": "json"
        }
      ]
    },
    "filename": "./app/Http/Controllers/Api/UserPlanController.php",
    "groupTitle": "Platform"
  },
  {
    "type": "get",
    "url": "api/v1/search-events",
    "title": "Find Events",
    "name": "Find_Events",
    "version": "1.0.0",
    "group": "Search_screen",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Integer",
            "optional": false,
            "field": "category",
            "description": "<p>id Category Id or @apiParam {Integer} user_max Maximun User of event or @apiParam {String} name Name Event or @apiParam {String} address Event Location</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "status",
            "description": "<p>Status return</p>"
          },
          {
            "group": "Success 200",
            "type": "Object",
            "optional": false,
            "field": "data",
            "description": "<p>Data return</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Message return</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "error",
            "description": "<p>Error return</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Response:",
          "content": "{\n\"status\": 201,\n\"data\": {\n\"meta\": {\n\"page\": 1,\n\"perPage\": 10,\n\"total\": 1\n},\n\"events\": [\n {\n\"id\": 5,\n\"cat_id\": \"1\",\n\"name\": \"SeaGame\",\n\"address\": \"Quảng Bình \",\n\"description\": \"Soccer, tennis\",\n\"images\": [\n{\n\"origin\": \"uploads/images/event/origin/5-147546046523uKCJyuELH4q2gj.jpg\",\n\"thumb\": \"uploads/images/event/thumb/5-147546046523uKCJyuELH4q2gj.jpg\"\n}\n ],\n\"user_id\": 1,\n\"long\": \"99.99999999\",\n\"lag\": \"16.04922300\",\n\"group_id\": \"1\",\n\"status\": \"1\",\n\"date_start\": \"0000-00-00 00:00:00\",\n\"date_end\": \"0000-00-00 00:00:00\",\n\"user_max\": \"100\",\n\"created_at\": \"2016-10-03 02:07:45\",\n\"updated_at\": \"2016-10-03 02:07:45\"\n }\n]\n},\n\"message\": \"Succesfully.\",\n\"error\": 0\n}",
          "type": "json"
        }
      ]
    },
    "filename": "./app/Http/Controllers/Api/SearchController.php",
    "groupTitle": "Search_screen"
  },
  {
    "type": "get",
    "url": "api/v1/search-events-group",
    "title": "Find Events by Group",
    "name": "Find_Events_by_Group",
    "version": "1.0.0",
    "group": "Search_screen",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "name",
            "description": "<p>Name Group</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "status",
            "description": "<p>Status return</p>"
          },
          {
            "group": "Success 200",
            "type": "Object",
            "optional": false,
            "field": "data",
            "description": "<p>Data return</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Message return</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "error",
            "description": "<p>Error return</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Response:",
          "content": "{\n\"status\": 201,\n\"data\": {\n\"meta\": {\n\"page\": 1,\n\"perPage\": 10,\n\"total\": 1\n  },\n\"event_groups_f\": [\n{\n\"id\": 1,\n\"name\": \"Group 1\",\n\"images\": [\n   {\n\"origin\": \"http://line-matching.dev.bap.jp/uploads/images/groups/origin/1-1475562593kOYgkujKkeWuCC1n.jpg\",\n\"thumb\": \"http://line-matching.dev.bap.jp/uploads/images/groups/thumb/1-1475562593kOYgkujKkeWuCC1n.jpg\"\n  }\n  ],\n\"leader_max\": \"2\",\n\"user_max\": \"50\",\n\"user_id\": 1,\n\"description\": \"Entermation\",\n\"status\": \"1\",\n\"lat\": \"16.04922300\",\n\"long\": \"108.22080800\",\n\"updated_at\": \"2016-10-04 06:29:53\",\n\"event\": [\n{\n\"id\": 5,\n\"cat_id\": \"3\",\n\"name\": \"SeaGame 3\",\n\"address\": \"Quảng Bình \",\n\"description\": \"Soccer, tennis\",\n\"images\": [\n{\n\"origin\": \"uploads/images/event/origin/5-147546046523uKCJyuELH4q2gj.jpg\",\n\"thumb\": \"uploads/images/event/thumb/5-147546046523uKCJyuELH4q2gj.jpg\"\n  }\n ],\n\"user_id\": 1,\n\"long\": \"108.21707200\",\n\"lat\": \"16.05770300\",\n\"group_id\": \"1\",\n\"status\": \"1\",\n\"date_start\": \"0000-00-00 00:00:00\",\n\"date_end\": \"0000-00-00 00:00:00\",\n\"user_max\": \"100\",\n\"created_at\": \"2016-10-03 02:07:45\",\n    }\n   ]\n  }\n ]\n  },\n\"message\": \"Succesfully.\",\n\"error\": 0\n}",
          "type": "json"
        }
      ]
    },
    "filename": "./app/Http/Controllers/Api/SearchController.php",
    "groupTitle": "Search_screen"
  },
  {
    "type": "get",
    "url": "api/v1/event-detail/:id",
    "title": "Get Detail Event",
    "name": "Get_Detail_Event",
    "version": "1.0.0",
    "group": "Search_screen",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Integer",
            "optional": false,
            "field": "event",
            "description": "<p>id Event Id</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "status",
            "description": "<p>Status return</p>"
          },
          {
            "group": "Success 200",
            "type": "Array",
            "optional": false,
            "field": "data",
            "description": "<p>Data return</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Message return</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "error",
            "description": "<p>Error return</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Response:",
          "content": "{\n\"status\": 201,\n\"data\": [\n{\n\"id\": 2,\n\"cat_id\": \"2\",\n\"name\": \"Happy Birthday\",\n\"address\": \"105 Nguyễn Hữu Thọ, Hồ Chí Minh, Việt Nam\",\n\"description\": \"Birth good\",\n\"images\": [\n  {\n\"origin\": \"uploads/images/event/origin/2-1475313359Nbg57HO35W1wnCbU.jpg\",\n\"thumb\": \"uploads/images/event/thumb/2-1475313359Nbg57HO35W1wnCbU.jpg\"\n}\n],\n\"user_id\": 0,\n\"long\": \"99.99999999\",\n\"lag\": \"16.04922300\",\n\"group_id\": \"2\",\n\"status\": \"1\",\n\"date_start\": \"0000-00-00 00:00:00\",\n\"date_end\": \"0000-00-00 00:00:00\",\n\"user_max\": \"50\",\n\"created_at\": \"2016-10-01 09:15:59\",\n\"updated_at\": \"2016-10-01 09:16:00\",\n\"event_group\": {\n\"id\": 2,\n\"name\": \"Group 2\",\n\"images\": [\n{\n\"origin\": \"http://line-matching.dev.bap.jp/uploads/images/groups/origin/2-1475562769mOeJN2Xuastu6Hde.jpg\",\n\"thumb\": \"http://line-matching.dev.bap.jp/uploads/images/groups/thumb/2-1475562769mOeJN2Xuastu6Hde.jpg\"\n}\n],\n\"leader_max\": \"1\",\n\"user_max\": \"50\",\n\"user_id\": 1,\n\"description\": \"Food And Drinks\",\n\"status\": \"1\",\n\"lag\": \"16.04922300\",\n\"long\": \"108.22080800\",\n\"created_at\": \"2016-10-04 13:47:41\",\n\"updated_at\": \"2016-10-04 06:32:49\"\n},\n\"event_category\": null\n }\n],\n\"message\": \"Succesfully.\",\n\"error\": 0\n}",
          "type": "json"
        }
      ]
    },
    "filename": "./app/Http/Controllers/Api/SearchController.php",
    "groupTitle": "Search_screen"
  },
  {
    "type": "get",
    "url": "/user/:id",
    "title": "Read data of a User",
    "version": "0.3.0",
    "name": "GetUser",
    "group": "User",
    "permission": [
      {
        "name": "admin",
        "title": "Admin access rights needed.",
        "description": "<p>Optionally you can write here further Informations about the permission.</p> <p>An &quot;apiDefinePermission&quot;-block can have an &quot;apiVersion&quot;, so you can attach the block to a specific version.</p>"
      }
    ],
    "description": "<p>Compare Verison 0.3.0 with 0.2.0 and you will see the green markers with new items in version 0.3.0 and red markers with removed items since 0.2.0.</p>",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "id",
            "description": "<p>The Users-ID.</p>"
          }
        ]
      }
    },
    "examples": [
      {
        "title": "Example usage:",
        "content": "curl -i http://localhost/user/4711",
        "type": "json"
      }
    ],
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "id",
            "description": "<p>The Users-ID.</p>"
          },
          {
            "group": "Success 200",
            "type": "Date",
            "optional": false,
            "field": "registered",
            "description": "<p>Registration Date.</p>"
          },
          {
            "group": "Success 200",
            "type": "Date",
            "optional": false,
            "field": "name",
            "description": "<p>Fullname of the User.</p>"
          },
          {
            "group": "Success 200",
            "type": "String[]",
            "optional": false,
            "field": "nicknames",
            "description": "<p>List of Users nicknames (Array of Strings).</p>"
          },
          {
            "group": "Success 200",
            "type": "Object",
            "optional": false,
            "field": "profile",
            "description": "<p>Profile data (example for an Object)</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "profile.age",
            "description": "<p>Users age.</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "profile.image",
            "description": "<p>Avatar-Image.</p>"
          },
          {
            "group": "Success 200",
            "type": "Object[]",
            "optional": false,
            "field": "options",
            "description": "<p>List of Users options (Array of Objects).</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "options.name",
            "description": "<p>Option Name.</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "options.value",
            "description": "<p>Option Value.</p>"
          }
        ]
      }
    },
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "optional": false,
            "field": "NoAccessRight",
            "description": "<p>Only authenticated Admins can access the data.</p>"
          },
          {
            "group": "Error 4xx",
            "optional": false,
            "field": "UserNotFound",
            "description": "<p>The <code>id</code> of the User was not found.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Response (example):",
          "content": "HTTP/1.1 401 Not Authenticated\n{\n  \"error\": \"NoAccessRight\"\n}",
          "type": "json"
        }
      ]
    },
    "filename": "./node_modules/apidoc/example/example.js",
    "groupTitle": "User"
  },
  {
    "type": "get",
    "url": "/user/:id",
    "title": "Read data of a User",
    "version": "0.2.0",
    "name": "GetUser",
    "group": "User",
    "permission": [
      {
        "name": "admin",
        "title": "This title is visible in version 0.1.0 and 0.2.0",
        "description": ""
      }
    ],
    "description": "<p>Here you can describe the function. Multilines are possible.</p>",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>The Users-ID.</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>The Users-ID.</p>"
          },
          {
            "group": "Success 200",
            "type": "Date",
            "optional": false,
            "field": "name",
            "description": "<p>Fullname of the User.</p>"
          }
        ]
      }
    },
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "optional": false,
            "field": "UserNotFound",
            "description": "<p>The <code>id</code> of the User was not found.</p>"
          }
        ]
      }
    },
    "filename": "./node_modules/apidoc/example/_apidoc.js",
    "groupTitle": "User"
  },
  {
    "type": "get",
    "url": "/user/:id",
    "title": "Read data of a User",
    "version": "0.1.0",
    "name": "GetUser",
    "group": "User",
    "permission": [
      {
        "name": "admin",
        "title": "This title is visible in version 0.1.0 and 0.2.0",
        "description": ""
      }
    ],
    "description": "<p>Here you can describe the function. Multilines are possible.</p>",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>The Users-ID.</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>The Users-ID.</p>"
          },
          {
            "group": "Success 200",
            "type": "Date",
            "optional": false,
            "field": "name",
            "description": "<p>Fullname of the User.</p>"
          }
        ]
      }
    },
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "optional": false,
            "field": "UserNotFound",
            "description": "<p>The error description text in version 0.1.0.</p>"
          }
        ]
      }
    },
    "filename": "./node_modules/apidoc/example/_apidoc.js",
    "groupTitle": "User"
  },
  {
    "type": "post",
    "url": "/user",
    "title": "Create a new User",
    "version": "0.3.0",
    "name": "PostUser",
    "group": "User",
    "permission": [
      {
        "name": "none"
      }
    ],
    "description": "<p>In this case &quot;apiErrorStructure&quot; is defined and used. Define blocks with params that will be used in several functions, so you dont have to rewrite them.</p>",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "name",
            "description": "<p>Name of the User.</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "id",
            "description": "<p>The new Users-ID.</p>"
          }
        ]
      }
    },
    "filename": "./node_modules/apidoc/example/example.js",
    "groupTitle": "User",
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "optional": false,
            "field": "NoAccessRight",
            "description": "<p>Only authenticated Admins can access the data.</p>"
          },
          {
            "group": "Error 4xx",
            "optional": false,
            "field": "UserNameTooShort",
            "description": "<p>Minimum of 5 characters required.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Response (example):",
          "content": "HTTP/1.1 400 Bad Request\n{\n  \"error\": \"UserNameTooShort\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "type": "post",
    "url": "/user",
    "title": "Create a User",
    "version": "0.2.0",
    "name": "PostUser",
    "group": "User",
    "permission": [
      {
        "name": "none"
      }
    ],
    "description": "<p>In this case &quot;apiErrorStructure&quot; is defined and used. Define blocks with params that will be used in several functions, so you dont have to rewrite them.</p>",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "name",
            "description": "<p>Name of the User.</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "id",
            "description": "<p>The Users-ID.</p>"
          }
        ]
      }
    },
    "filename": "./node_modules/apidoc/example/_apidoc.js",
    "groupTitle": "User",
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "optional": false,
            "field": "NoAccessRight",
            "description": "<p>Only authenticated Admins can access the data.</p>"
          },
          {
            "group": "Error 4xx",
            "optional": false,
            "field": "UserNameTooShort",
            "description": "<p>Minimum of 5 characters required.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Response (example):",
          "content": "HTTP/1.1 400 Bad Request\n{\n  \"error\": \"UserNameTooShort\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "type": "put",
    "url": "api/v1/user-profile/:id",
    "title": "Update User Profile",
    "name": "Update_User_Profile",
    "version": "1.0.0",
    "group": "UserProfile",
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "status",
            "description": "<p>Status return</p>"
          },
          {
            "group": "Success 200",
            "type": "Array",
            "optional": false,
            "field": "data",
            "description": "<p>Data return</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Message return</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "error",
            "description": "<p>Error return</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Response:",
          "content": "{\n\"status\": 201,\n    \"data\": {\n    \"id\": \"1\",\n    \"user_id\": \"2\",\n    \"avatar\": \"abc.jpg\",\n    \"address\": \"America\",\n    \"description\": \"Test upload\",\n    \"on_groups\": \"1\",\n    \"on_chat\": \"0\",\n    \"on_event\": \"1\",\n    \"created_at\": \"-0001-11-30 00:00:00\",\n    \"updated_at\": \"2016-10-07 10:05:20\"\n  },\n  \"message\": \"Succesfully.\",\n  \"error\": 0\n }",
          "type": "json"
        }
      ]
    },
    "filename": "./app/Http/Controllers/Api/UserProfileController.php",
    "groupTitle": "UserProfile"
  },
  {
    "type": "put",
    "url": "/user/:id",
    "title": "Change a User",
    "version": "0.3.0",
    "name": "PutUser",
    "group": "User",
    "permission": [
      {
        "name": "none"
      }
    ],
    "description": "<p>This function has same errors like POST /user, but errors not defined again, they were included with &quot;apiErrorStructure&quot;</p>",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "name",
            "description": "<p>Name of the User.</p>"
          }
        ]
      }
    },
    "filename": "./node_modules/apidoc/example/example.js",
    "groupTitle": "User",
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "optional": false,
            "field": "NoAccessRight",
            "description": "<p>Only authenticated Admins can access the data.</p>"
          },
          {
            "group": "Error 4xx",
            "optional": false,
            "field": "UserNameTooShort",
            "description": "<p>Minimum of 5 characters required.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Response (example):",
          "content": "HTTP/1.1 400 Bad Request\n{\n  \"error\": \"UserNameTooShort\"\n}",
          "type": "json"
        }
      ]
    }
  },
  {
    "type": "post",
    "url": "api/v1/event/:id/buy",
    "title": "Buy Event Packge",
    "name": "Buy_Event_Packge",
    "version": "1.0.0",
    "group": "UserPlan",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Integer",
            "optional": false,
            "field": "user",
            "description": "<p>plans id Id User Plans</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "status",
            "description": "<p>Status return</p>"
          },
          {
            "group": "Success 200",
            "type": "Object",
            "optional": false,
            "field": "data",
            "description": "<p>Data return</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Message return</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "error",
            "description": "<p>Error return</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Response:",
          "content": "{\n\"status\": 201,\n\"data\": {\n\"note\": 0,\n\"buy_event\": {\n\"event_id\": \"1\",\n\"name\": \"event 1\",\n\"price\": \"5000\",\n\"updated_at\": \"2016-10-11 07:50:29\",\n\"created_at\": \"2016-10-11 07:50:29\",\n\"id\": 7\n}\n},\n\"message\": \"Succesfully.\",\n\"error\": 0\n }",
          "type": "json"
        }
      ]
    },
    "filename": "app/Http/Controllers/Api/UserPlanController.php",
    "groupTitle": "UserPlan"
  },
  {
    "type": "get",
    "url": "api/v1/user_plan",
    "title": "Get Event Packge",
    "name": "Get_Event_Packge",
    "version": "1.0.0",
    "group": "UserPlan",
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "status",
            "description": "<p>Status return</p>"
          },
          {
            "group": "Success 200",
            "type": "Object",
            "optional": false,
            "field": "data",
            "description": "<p>Data return</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Message return</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "error",
            "description": "<p>Error return</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Response:",
          "content": "{\n\"status\": 201,\n\"data\": {\n\"meta\": {\n\"page\": 1,\n\"perPage\": 10,\n\"total\": 1\n },\n\"plan_user\": [\n{\n\"name\": \"event 1\",\n\"amount\": \"5000\"\n },\n {\n\"name\": \"event 2\",\n\"amount\": \"3\"\n },\n {\n\"name\": \"event 3\",\n\"amount\": \"2\"\n },\n {\n\"name\": \"event 4\",\n\"amount\": \"100000000\"\n}\n]\n},\n\"message\": \"Succesfully.\",\n\"error\": 0\n }",
          "type": "json"
        }
      ]
    },
    "filename": "app/Http/Controllers/Api/UserPlanController.php",
    "groupTitle": "UserPlan"
  },
  {
    "type": "put",
    "url": "api/v1/user-profile-notifi/:id",
    "title": "Update Notification User Profile",
    "name": "Update_Notification_User_Profile",
    "version": "1.0.0",
    "group": "UserProfile",
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "status",
            "description": "<p>Status return</p>"
          },
          {
            "group": "Success 200",
            "type": "Array",
            "optional": false,
            "field": "data",
            "description": "<p>Data return</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Message return</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "error",
            "description": "<p>Error return</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Response:",
          "content": "{\n\"status\": 201,\n\"data\": [\n{\n\"on_groups\": \"0\",\n\"on_chat\": \"1\",\n\"on_event\": \"0\"\n}\n],\n\"message\": \"Succesfully.\",\n\"error\": 0\n }",
          "type": "json"
        }
      ]
    },
    "filename": "app/Http/Controllers/Api/UserProfileController.php",
    "groupTitle": "UserProfile"
  },
  {
    "type": "put",
    "url": "api/v1/user-profile/:id",
    "title": "Update User Profile",
    "name": "Update_User_Profile",
    "version": "1.0.0",
    "group": "UserProfile",
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "status",
            "description": "<p>Status return</p>"
          },
          {
            "group": "Success 200",
            "type": "Array",
            "optional": false,
            "field": "data",
            "description": "<p>Data return</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Message return</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "error",
            "description": "<p>Error return</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Response:",
          "content": "{\n\"status\": 201,\n\"data\": {\n\"id\": \"1\",\n\"user_id\": \"2\",\n\"avatar\": \"abc.jpg\",\n\"address\": \"America\",\n\"description\": \"Test upload\",\n\"on_groups\": \"1\",\n\"on_chat\": \"0\",\n\"on_event\": \"1\",\n\"created_at\": \"-0001-11-30 00:00:00\",\n\"updated_at\": \"2016-10-07 10:05:20\"\n },\n\"message\": \"Succesfully.\",\n\"error\": 0\n }",
          "type": "json"
        }
      ]
    },
    "filename": "app/Http/Controllers/Api/UserProfileController.php",
    "groupTitle": "UserProfile"
  },
  {
    "type": "put",
    "url": "api/v1/user-profile/:id",
    "title": "Update User Profile",
    "name": "Update_User_Profile",
    "version": "1.0.0",
    "group": "UserProfile",
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "status",
            "description": "<p>Status return</p>"
          },
          {
            "group": "Success 200",
            "type": "Array",
            "optional": false,
            "field": "data",
            "description": "<p>Data return</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "message",
            "description": "<p>Message return</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "error",
            "description": "<p>Error return</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Response:",
          "content": "{\n\"status\": 201,\n\"data\": {\n\"id\": \"1\",\n\"user_id\": \"2\",\n\"avatar\": \"abc.jpg\",\n\"address\": \"America\",\n\"description\": \"Test upload\",\n\"on_groups\": \"1\",\n\"on_chat\": \"0\",\n\"on_event\": \"1\",\n\"created_at\": \"-0001-11-30 00:00:00\",\n\"updated_at\": \"2016-10-07 10:05:20\"\n },\n\"message\": \"Succesfully.\",\n\"error\": 0\n }",
          "type": "json"
        }
      ]
    },
    "filename": "app/Http/Controllers/Api/UserTokenController.php",
    "groupTitle": "UserProfile"
  },
  {
    "type": "post",
    "url": "http://line-matching.dev.bap.jp/api/v1/groups",
    "title": "CreatGroup",
    "name": "Creat_Group",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "string",
            "optional": false,
            "field": "name",
            "description": "<p>Name Group</p>"
          },
          {
            "group": "Parameter",
            "type": "integer",
            "optional": false,
            "field": "leader_max",
            "description": "<p>The maximum number people of Group</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "status",
            "description": "<p>Status of Group</p>"
          },
          {
            "group": "Parameter",
            "type": "integer",
            "optional": false,
            "field": "user_id",
            "description": "<p>ID of User</p>"
          },
          {
            "group": "Parameter",
            "type": "integer",
            "optional": false,
            "field": "user_max",
            "description": "<p>The maximum number people of Group</p>"
          },
          {
            "group": "Parameter",
            "type": "string",
            "optional": false,
            "field": "Description",
            "description": "<p>of Group</p>"
          },
          {
            "group": "Parameter",
            "type": "string",
            "optional": false,
            "field": "Image",
            "description": "<p>of Group</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "long",
            "description": "<p>Latitude</p>"
          },
          {
            "group": "Parameter",
            "type": "Number",
            "optional": false,
            "field": "lag",
            "description": "<p>Longitude</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "status",
            "description": "<p>Status Response</p>"
          },
          {
            "group": "Success 200",
            "type": "Object",
            "optional": false,
            "field": "data",
            "description": "<p>Data Response</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "message",
            "description": "<p>Message Response</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "error",
            "description": "<p>Error of request</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Response:",
          "content": "\"status\": 201,\n\"data\": {\n\"user_id\": 1,\n\"leader_max\": \"50\",\n\"user_max\": \"50\",\n\"name\": \"Group great\",\n\"description\": \"descripton of the group\",\n\"status\": \"0\",\n\"lag\": \"15.245541\",\n\"long\": \"21.254\",\n\"updated_at\": \"2016-09-28 08:06:10\",\n\"images\": [\n    {\n        \"origin\": \"uploads/images/groups/origin/-1475049970VCstKCBvpA0qynZu.jpg\",\n        \"thumb\": \"uploads/images/groups/thumb/-1475049970VCstKCBvpA0qynZu.jpg\"\n    }\n],\n\"created_at\": \"2016-09-28 08:06:10\",\n\"id\": 83\n},\n\"message\": \"Succesfully.\",\n\"error\": 0\n    }",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
<<<<<<< HEAD
    "filename": "./app/Http/Controllers/Api/GroupsController.php",
    "group": "_var_www_html_Line_Matching_app_Http_Controllers_Api_GroupsController_php",
    "groupTitle": "_var_www_html_Line_Matching_app_Http_Controllers_Api_GroupsController_php"
  },
  {
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "optional": false,
            "field": "varname1",
            "description": "<p>No type.</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "varname2",
            "description": "<p>With type.</p>"
          }
        ]
      }
    },
    "type": "",
    "url": "",
    "version": "0.0.0",
    "filename": "./node_modules/apidoc/template/main.js",
    "group": "_var_www_html_Line_Matching_node_modules_apidoc_template_main_js",
    "groupTitle": "_var_www_html_Line_Matching_node_modules_apidoc_template_main_js",
    "name": ""
  },
  {
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "optional": false,
            "field": "varname1",
            "description": "<p>No type.</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "varname2",
            "description": "<p>With type.</p>"
          }
        ]
      }
    },
    "type": "",
    "url": "",
    "version": "0.0.0",
    "filename": "./public/docs/main.js",
    "group": "_var_www_html_Line_Matching_public_docs_main_js",
    "groupTitle": "_var_www_html_Line_Matching_public_docs_main_js",
    "name": ""
=======
    "filename": "app/Http/Controllers/Api/GroupsController.php",
    "group": "_home_viet_Code_Line_Matching_app_Http_Controllers_Api_GroupsController_php",
    "groupTitle": "_home_viet_Code_Line_Matching_app_Http_Controllers_Api_GroupsController_php"
>>>>>>> cuong/jwt_token/alpha
  }
] });
