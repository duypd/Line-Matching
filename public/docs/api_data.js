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
    "filename": "app/Http/Controllers/Api/EventCategoriesController.php",
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
    "filename": "app/Http/Controllers/Api/EventCategoriesController.php",
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
    "filename": "app/Http/Controllers/Api/EventCategoriesController.php",
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
    "filename": "app/Http/Controllers/Api/EventCategoriesController.php",
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
    "filename": "app/Http/Controllers/Api/EventCategoriesController.php",
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
    "filename": "app/Http/Controllers/Api/EventsController.php",
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
    "filename": "app/Http/Controllers/Api/PrPointController.php",
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
    "filename": "app/Http/Controllers/Api/EventsController.php",
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
    "filename": "app/Http/Controllers/Api/EventsController.php",
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
    "filename": "app/Http/Controllers/Api/PrPointController.php",
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
    "filename": "app/Http/Controllers/Api/EventsController.php",
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
    "filename": "app/Http/Controllers/Api/PrPointController.php",
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
    "filename": "app/Http/Controllers/Api/EventsController.php",
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
          "content": "{\n\"status\": 200,\n\"data\": [\n{\n\"id\": 2,\n\"cat_id\": \"1\",\n\"name\": \"Happy Birthday\",\n\"address\": \"105 Nguyễn Hữu Thọ, Hồ Chí Minh, Việt Nam\",\n\"description\": \"Birth good\",\n\"images\": [\n{\n\"origin\": \"uploads/images/event/origin/2-1475313359Nbg57HO35W1wnCbU.jpg\",\n\"thumb\": \"uploads/images/event/thumb/2-1475313359Nbg57HO35W1wnCbU.jpg\"\n}\n],\n\"user_id\": 0,\n\"long\": \"99.99999999\",\n\"lag\": \"16.04922300\",\n\"group_id\": \"0\",\n\"status\": \"1\",\n\"date_start\": \"0000-00-00 00:00:00\",\n\"date_end\": \"0000-00-00 00:00:00\",\n\"user_max\": \"50\",\n\"created_at\": \"2016-10-01 09:15:59\",\n\"updated_at\": \"2016-10-01 09:16:00\"\n },\n {\n\"id\": 5,\n\"cat_id\": \"1\",\n\"name\": \"SeaGame\",\n\"address\": \"105 Nguyễn Hữu Thọ, Hồ Chí Minh, Việt Nam\",\n\"description\": \"Soccer, tennis\",\n\"images\": [\n{\n\"origin\": \"uploads/images/event/origin/5-147546046523uKCJyuELH4q2gj.jpg\",\n\"thumb\": \"uploads/images/event/thumb/5-147546046523uKCJyuELH4q2gj.jpg\"\n}\n],\n\"user_id\": 1,\n\"long\": \"99.99999999\",\n\"lag\": \"16.04922300\",\n\"group_id\": \"1\",\n\"status\": \"1\",\n\"date_start\": \"0000-00-00 00:00:00\",\n\"date_end\": \"0000-00-00 00:00:00\",\n\"user_max\": \"50\",\n\"created_at\": \"2016-10-03 02:07:45\",\n\"updated_at\": \"2016-10-03 02:07:45\"\n }\n ],\n\"message\": \"Succesfully.\"\n }",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "app/Http/Controllers/Api/EventsController.php",
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
          "content": "{\n\"status\": 200,\n\"data\": [\n{\n\"id\": 2,\n\"event_id\": 2,\n\"content\": \"Store Telephone\",\nimages\": [\n{\n\"origin\": \"http://line-matching.dev.bap.jp/uploads/images/prpoint/origin/2-1475317232ymZDa1oT5epxaeqk.jpg\",\n\"thumb\": \"http://line-matching.dev.bap.jp/uploads/images/prpoint/thumb/2-1475317232ymZDa1oT5epxaeqk.jpg\"\n}\n],\n\"created_at\": \"2016-10-01 10:20:32\",\n\"updated_at\": \"2016-10-01 10:20:32\"\n},\n{\n\"id\": 4,\n\"event_id\": 1,\n\"content\": \"Quảng cáo Nhà Hàng\",\n\"images\": [\n{\n\"origin\": \"http://line-matching.dev.bap.jp/uploads/images/prpoint/origin/4-14754673726UJOqRPC0ErVRMJK.jpg\",\n\"thumb\": \"http://line-matching.dev.bap.jp/uploads/images/prpoint/thumb/4-14754673726UJOqRPC0ErVRMJK.jpg\"\n}\n],\n\"created_at\": \"2016-10-03 04:02:52\",\n\"updated_at\": \"2016-10-03 04:02:52\"\n}\n],\n\"message\": \"Succesfully.\"",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "app/Http/Controllers/Api/PrPointController.php",
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
    "filename": "app/Http/Controllers/Api/EventsController.php",
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
    "filename": "app/Http/Controllers/Api/PrPointController.php",
    "groupTitle": "Event"
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
    "filename": "app/Http/Controllers/Api/EventsController.php",
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
    "filename": "app/Http/Controllers/Api/GroupsController.php",
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
    "filename": "app/Http/Controllers/Api/GroupsController.php",
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
    "filename": "app/Http/Controllers/Api/GroupsController.php",
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
    "filename": "app/Http/Controllers/Api/GroupsController.php",
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
          "content": "{\n\"status\": 200,\n\"data\": [\n{\n\"id\": 1,\n\"name\": \"Group great\",\n\"images\": [\n{\n\"origin\": \"uploads/images/groups/origin/1-1475464381NlUlKOiBRkLjqwra.jpg\",\n\"thumb\": \"uploads/images/groups/thumb/1-1475464381NlUlKOiBRkLjqwra.jpg\"\n }\n],\n\"leader_max\": \"50\",\n\"user_max\": \"50\",\n\"user_id\": 1,\n\"description\": \"descripton of the group\",\n\"status\": \"0\",\n\"lag\": \"15.24554100\",\n \"long\": \"21.25400000\",\n \"created_at\": \"2016-10-03 10:12:49\",\n \"updated_at\": \"2016-10-03 03:13:01\"\n },\n {\n\"id\": 2,\n\"name\": \"Group great\",\n \"images\": [\n {\n\"origin\": \"uploads/images/groups/origin/2-1475464541VXBznZso1uvK6oyn.jpg\",\n\"thumb\": \"uploads/images/groups/thumb/2-1475464541VXBznZso1uvK6oyn.jpg\"\n }\n],\n\"leader_max\": \"50\",\n\"user_max\": \"50\",\n\"user_id\": 1,\n\"description\": \"descripton of the group\",\n\"status\": \"1\",\n\"lag\": \"15.24554100\",\n\"long\": \"21.25400000\",\n\"created_at\": \"2016-10-03 10:15:29\",\n \"updated_at\": \"2016-10-03 03:15:41\"\n}\n ],\n \"message\": \"Succesfully.\"\n }",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "app/Http/Controllers/Api/GroupsController.php",
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
    "filename": "app/Http/Controllers/Api/GroupsController.php",
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
    "filename": "app/Http/Controllers/Api/MyPageController.php",
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
    "filename": "app/Http/Controllers/Api/MyPageController.php",
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
          "content": "{\n\"status\": 200,\n\"data\": {\n\"total\": 3,\n\"per_page\": 10,\n\"current_page\": 1,\n\"last_page\": 1,\n\"next_page_url\": null,\n\"prev_page_url\": null,\n\"from\": 1,\n\"to\": 3,\n\"data\": [\n{\n\"id\": 1,\n\"name\": \"Group 1\",\n\"images\": [\n{\n\"origin\": \"http://line-matching.dev.bap.jp/uploads/images/groups/origin/1-1475562593kOYgkujKkeWuCC1n.jpg\",\n\"thumb\": \"http://line-matching.dev.bap.jp/uploads/images/groups/thumb/1-1475562593kOYgkujKkeWuCC1n.jpg\"\n}\n],\n\"leader_max\": \"2\",\n\"user_max\": \"50\",\n\"user_id\": 1,\n\"description\": \"Entermation\",\n\"status\": \"1\",\n\"lat\": \"16.04922300\",\n\"long\": \"108.22080800\",\n\"created_at\": \"2016-10-04 13:47:52\",\n\"updated_at\": \"2016-10-04 06:29:53\",\n\"event\": [\n{\n\"id\": 5,\n\"cat_id\": \"3\",\n\"name\": \"SeaGame 3\",\n\"address\": \"Quảng Bình \",\n\"description\": \"Soccer, tennis\",\n\"images\": [\n{\n\"origin\": \"uploads/images/event/origin/5-147546046523uKCJyuELH4q2gj.jpg\",\n\"thumb\": \"uploads/images/event/thumb/5-147546046523uKCJyuELH4q2gj.jpg\"\n }\n ],\n \"user_id\": 1,\n \"long\": \"108.21707200\",\n \"lat\": \"16.05770300\",\n \"group_id\": \"1\",\n \"status\": \"1\",\n \"date_start\": \"0000-00-00 00:00:00\",\n \"date_end\": \"0000-00-00 00:00:00\",\n \"user_max\": \"100\",\n \"created_at\": \"2016-10-03 02:07:45\",\n \"updated_at\": \"2016-10-03 02:07:45\"\n }\n ]\n },\n \"message\": \"Succesfully.\",\n \"error\": null\n }",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "app/Http/Controllers/Api/MyPageController.php",
    "groupTitle": "MyPage"
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
    "filename": "app/Http/Controllers/Api/SearchController.php",
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
    "filename": "app/Http/Controllers/Api/SearchController.php",
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
    "filename": "app/Http/Controllers/Api/SearchController.php",
    "groupTitle": "Search_screen"
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
    "filename": "app/Http/Controllers/Api/GroupsController.php",
    "group": "_var_www_html_Line_Matching_app_Http_Controllers_Api_GroupsController_php",
    "groupTitle": "_var_www_html_Line_Matching_app_Http_Controllers_Api_GroupsController_php"
  }
] });
