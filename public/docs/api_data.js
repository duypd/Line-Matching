define({ "api": [
  {
    "type": "post",
    "url": "api/v1/create",
    "title": "Create EventCategory",
    "name": "Create_EventCategory",
    "group": "EventCategory",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Integer",
            "optional": false,
            "field": "user_id",
            "description": "<p>ID USer</p>"
          },
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
          }
        ]
      },
      "examples": [
        {
          "title": "Response:",
          "content": " {\n \"status\": 200,\n \"data\": {\n  \"id\": 34,\n  \"id\": 34,\n  \"cat_id\": \"1\",\n  \"name\": \"Thi chim\",\n  \"address\": \"\",\n  \"description\": \"Xem những con chim chơi hay nhất\",\n  \"images\": null,\n  \"user_id\": 0,\n  \"long\": \"0.00000000\",\n  \"lag\": \"0.00000000\",\n  \"group_id\": \"0\",\n  \"status\": \"1\",\n  \"date_start\": \"0000-00-00 00:00:00\",\n  \"date_end\": \"0000-00-00 00:00:00\",\n  \"user_max\": \"50\",\n  \"created_at\": \"2016-09-22 11:34:48\",\n  \"updated_at\": \"2016-09-24 06:59:43\"\n    },\n    \"message\": \"Succesfully.\",\n    \"error\": null\n}",
          "type": "json"
        }
      ]
    },
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "optional": false,
            "field": "BadRequest",
            "description": "<p>User ID not Found</p>"
          }
        ]
      },
      "examples": [
        {
          "title": ":",
          "content": "{\n    \"status\": 200,\n    \"data\": {\n  \"id\": 34,\n \"cat_id\": \"1\",\n  \"name\": \"Thi chim\",\n  \"address\": \"\",\n  \"description\": \"Xem những con chim chơi hay nhất\",\n  \"images\": null,\n  \"user_id\": 0,\n  \"long\": \"0.00000000\",\n  \"lag\": \"0.00000000\",\n  \"group_id\": \"0\",\n  \"status\": \"1\",\n  \"date_start\": \"0000-00-00 00:00:00\",\n  \"date_end\": \"0000-00-00 00:00:00\",\n  \"user_max\": \"50\",\n \"created_at\": \"2016-09-22 11:34:48\",\n  \"updated_at\": \"2016-09-24 06:59:43\"\n     \n\n\n    },\n    \"message\": \"Succesfully.\",\n    \"error\": null\n}",
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
    "url": "api.ecategories.get.delete",
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
    "filename": "app/Http/Controllers/Api/EventCategoriesController.php",
    "groupTitle": "EventCategory"
  },
  {
    "type": "put",
    "url": "api.ecategories.put.create",
    "title": "Update EventCategory",
    "name": "Update_EventCategory",
    "group": "EventCategory",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "integer",
            "optional": false,
            "field": "user_id",
            "description": "<p>ID User</p>"
          },
          {
            "group": "Parameter",
            "type": "tinyint",
            "optional": false,
            "field": "status",
            "description": "<p>Status $apiParam {string}  name Name EventCategory</p>"
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
          }
        ]
      }
    },
    "examples": [
      {
        "title": "Response:",
        "content": "{\n   \"status\": 201,\n\"data\": {\n   \"id\": 22,\n   \"name\": \"check_event\",\n   \"status\": \"1\",\n   \"created_at\": \"2016-09-20 07:00:09\",\n   \"updated_at\": \"2016-09-28 03:04:19\"\n   },\n   \"message\": \"Succesfully.\",\n   \"error\": 0\n }",
        "type": "json"
      }
    ],
    "version": "0.0.0",
    "filename": "app/Http/Controllers/Api/EventCategoriesController.php",
    "groupTitle": "EventCategory"
  },
  {
    "type": "get",
    "url": "api.ecategories.get.index",
    "title": "List",
    "name": "getList",
    "group": "EventCategory",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "integer",
            "optional": false,
            "field": "eventCategory",
            "description": "<p>ID-EventCategory</p>"
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
            "field": "Total",
            "description": "<p>Record</p>"
          },
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "per_page",
            "description": "<p>Some items on 1 page</p>"
          },
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "current_page",
            "description": "<p>Current Page</p>"
          },
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "last_page",
            "description": "<p>Last Page</p>"
          },
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "next_page_url",
            "description": "<p>Next Page</p>"
          },
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "prev_page_url",
            "description": "<p>Prevew Page</p>"
          },
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
          }
        ]
      }
    },
    "examples": [
      {
        "title": "Response:",
        "content": "{\n\"status\": 200,\n\"data\": {\n   \"total\": 22,\n   \"per_page\": 10,\n   \"current_page\": 1,\n   \"last_page\": 3,\n   \"next_page_url\": \"http://line-matching.dev.bap.jp/api/v1/ecategories?page=2\",\n   \"prev_page_url\": null,\n   \"from\": 1,\n   \"to\": 10,\n   \"data\": [\n       {\n           \"id\": 8,\n          \"name\": \"die\",\n           \"status\": \"1\",\n           \"created_at\": \"2016-09-19 09:10:37\",\n           \"updated_at\": \"2016-09-19 09:10:37\"\n       },\n      \n       {\n           \"id\": 19,\n           \"name\": \"bycial\",\n           \"status\": \"1\",\n           \"created_at\": \"2016-09-20 06:53:21\",\n           \"updated_at\": \"2016-09-20 06:53:21\"\n       }\n   ]\n   },\n\"message\": \"Succesfully.\",\n\"error\": null\n}",
        "type": "json"
      }
    ],
    "version": "0.0.0",
    "filename": "app/Http/Controllers/Api/EventCategoriesController.php",
    "groupTitle": "EventCategory"
  },
  {
    "type": "get",
    "url": "api.ecategories.get.show",
    "title": "View",
    "name": "getShow",
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
          }
        ]
      }
    },
    "examples": [
      {
        "title": "Response:",
        "content": "{\n   \"status\": 200,\n   \"data\": {\n   \"id\": 22,\n   \"name\": \"check_event\",\n   \"status\": \"1\",\n   \"created_at\": \"2016-09-20 07:00:09\",\n   \"updated_at\": \"2016-09-28 03:04:19\"\n   },\n   \"message\": \"Succesfully.\",\n   \"error\": null\n   }",
        "type": "json"
      }
    ],
    "version": "0.0.0",
    "filename": "app/Http/Controllers/Api/EventCategoriesController.php",
    "groupTitle": "EventCategory"
  },
  {
    "type": "post",
    "url": "api.events.join.post.create",
    "title": "CreateJoinEvent",
    "name": "CreatJoinEvent",
    "group": "Event",
    "parameter": {
      "fields": {
        "Parameter": [
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
          }
        ]
      },
      "examples": [
        {
          "title": "Response:",
          "content": "{\n  \"status\": 201,\n  \"data\": null,\n  \"message\": \"Succesfully.\",\n  \"error\": 0\n  }",
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
    "url": "http://line-matching.dev.bap.jp/api/v1/events",
    "title": "Creat Event",
    "name": "Creat_Event",
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
            "type": "integer",
            "optional": false,
            "field": "event_id",
            "description": "<p>ID- Event</p>"
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
          }
        ]
      },
      "examples": [
        {
          "title": "Response:",
          "content": "{\n\"status\": 201,\n\"data\": {\n   \"name\": \"Thi chim canh\",\n   \"description\": \"Xem những con chim chơi hay nhất\",\n   \"long\": \"12.25365\",\n   \"lag\": \"25.1214581\",\n   \"address\": \"109 Nguyễn Hữu Thọ, Hồ Chí Minh, Việt Nam\",\n   \"cat_id\": \"1\",\n   \"user_max\": \"50\",\n   \"status\": 1,\n   \"updated_at\": \"2016-09-28 06:42:01\",\n   \"created_at\": \"2016-09-28 06:42:01\",\n   \"id\": 126,\n   \"images\": [\n       {\n           \"origin\": \"uploads/images/event/origin/126-1475044921rTpHaqbGFKqvRsqz.jpg\",\n           \"thumb\": \"uploads/images/event/thumb/126-1475044921rTpHaqbGFKqvRsqz.jpg\"\n       }\n   ]\n   },\n\"message\": \"Succesfully.\",\n \"error\": 0\n  }",
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
    "url": "api.events.get.delete",
    "title": "Delete Event",
    "name": "Delete_Event",
    "group": "Event",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "integer",
            "optional": false,
            "field": "Event_id",
            "description": "<p>ID Event</p>"
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
    "filename": "app/Http/Controllers/Api/EventsController.php",
    "groupTitle": "Event"
  },
  {
    "type": "delete",
    "url": "api.events.get.leave",
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
            "description": "<p>ID-events_users_maps</p>"
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
          }
        ]
      },
      "examples": [
        {
          "title": "Response:",
          "content": "{\n  \"status\": 201,\n  \"data\": true,\n  \"message\": \"Succesfully.\",\n  \"error\": 0\n  }",
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
    "url": "api.events.get.index",
    "title": "List Event",
    "name": "ListEvent",
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
            "type": "integer",
            "optional": false,
            "field": "event_id",
            "description": "<p>ID-Event</p>"
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
            "field": "name",
            "description": "<p>Name of Event</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "address",
            "description": "<p>Address of Event</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "description",
            "description": "<p>Description of Event</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "images",
            "description": "<p>Images of Event</p>"
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
            "field": "group_id",
            "description": "<p>Event of Group</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "date_start",
            "description": "<p>Date start of Event</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "date_end",
            "description": "<p>Date finish of Event</p>"
          },
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "user_max",
            "description": "<p>The maximum number people of events</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Response:",
          "content": "    {\n    \"status\": 200,\n     \"data\": [\n      {\n        \"id\": 126,\n        \"cat_id\": \"1\",\n        \"name\": \"chan ga\",\n        \"address\": \"123 BC\",\n        \"description\": \"adfgfghsdf\",\n        \"images\": [\n            {\n                \"origin\": \"uploads/images/event/origin/126-1475044921rTpHaqbGFKqvRsqz.jpg\",\n                \"thumb\": \"uploads/images/event/thumb/126-1475044921rTpHaqbGFKqvRsqz.jpg\"\n            }\n        ],\n        \"user_id\": 0,\n        \"long\": \"12.25365000\",\n        \"lag\": \"25.12145810\",\n        \"group_id\": \"0\",\n        \"status\": \"1\",\n        \"date_start\": \"0000-00-00 00:00:00\",\n        \"date_end\": \"0000-00-00 00:00:00\",\n        \"user_max\": \"40\",\n        \"created_at\": \"2016-09-28 06:42:01\",\n        \"updated_at\": \"2016-09-28 07:02:15\"\n    }\n],\n\"message\": \"Succesfully.\"\n}",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "app/Http/Controllers/Api/EventsController.php",
    "groupTitle": "Event"
  },
  {
    "type": "put",
    "url": "http://line-matching.dev.bap.jp/api/v1/events/{id}",
    "title": "Update Event",
    "name": "Upadate_Event",
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
            "type": "integer",
            "optional": false,
            "field": "event_id",
            "description": "<p>ID- Event</p>"
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
            "description": "<p>status Response</p>"
          },
          {
            "group": "Success 200",
            "type": "Object",
            "optional": false,
            "field": "data",
            "description": "<p>Data Response</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Response:",
          "content": "{\n        \"status\": 201,\n        \"data\": {\n            \"id\": 126,\n            \"cat_id\": \"1\",\n            \"name\": \"chan ga\",\n            \"address\": \"123 BC\",\n            \"description\": \"adfgfghsdf\",\n            \"images\": [\n                {\n                    \"origin\": \"uploads/images/event/origin/126-1475044921rTpHaqbGFKqvRsqz.jpg\",\n                    \"thumb\": \"uploads/images/event/thumb/126-1475044921rTpHaqbGFKqvRsqz.jpg\"\n                }\n            ],\n            \"user_id\": 0,\n            \"long\": \"12.25365000\",\n            \"lag\": \"25.12145810\",\n            \"group_id\": \"0\",\n            \"status\": \"1\",\n            \"date_start\": \"0000-00-00 00:00:00\",\n            \"date_end\": \"0000-00-00 00:00:00\",\n            \"user_max\": \"40\",\n            \"created_at\": \"2016-09-28 06:42:01\",\n            \"updated_at\": \"2016-09-28 07:02:15\"\n        },\n        \"message\": \"Succesfully.\",\n        \"error\": 0\n        }",
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
    "url": "api.events.get.show",
    "title": "View",
    "name": "View",
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
            "type": "integer",
            "optional": false,
            "field": "event_id",
            "description": "<p>ID-Event</p>"
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
            "field": "name",
            "description": "<p>Name of Event</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "address",
            "description": "<p>Address of Event</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "description",
            "description": "<p>Description of Event</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "images",
            "description": "<p>Images of Event</p>"
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
            "field": "group_id",
            "description": "<p>Event of Group</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "date_start",
            "description": "<p>Date start of Event</p>"
          },
          {
            "group": "Success 200",
            "type": "Number",
            "optional": false,
            "field": "date_end",
            "description": "<p>Date finish of Event</p>"
          },
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "user_max",
            "description": "<p>The maximum number people of events</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Response:",
          "content": " {\n\"status\": 200,\n\"data\": {\n    \"id\": 125,\n    \"cat_id\": \"1\",\n    \"name\": \"Thi chim canh\",\n    \"address\": \"109 Nguyễn Hữu Thọ, Hồ Chí Minh, Việt Nam\",\n    \"description\": \"Xem những con chim chơi hay nhất\",\n    \"images\": [\n        {\n            \"origin\": \"uploads/images/event/origin/125-1474960304qb6Hb87UaEieHbrr.jpg\",\n            \"thumb\": \"uploads/images/event/thumb/125-1474960304qb6Hb87UaEieHbrr.jpg\"\n        }\n    ],\n    \"user_id\": 0,\n    \"long\": \"12.25365000\",\n    \"lag\": \"25.12145810\",\n    \"group_id\": \"0\",\n    \"status\": \"1\",\n    \"date_start\": \"0000-00-00 00:00:00\",\n    \"date_end\": \"0000-00-00 00:00:00\",\n    \"user_max\": \"50\",\n    \"created_at\": \"2016-09-27 07:11:44\",\n    \"updated_at\": \"2016-09-27 07:11:44\"\n},\n\"message\": \"Succesfully.\",\n\"error\": null\n}",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "app/Http/Controllers/Api/EventsController.php",
    "groupTitle": "Event"
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
          "content": " {\n\"status\": 201,\n\"data\": {\n\"id\": 68,\n\"name\": \"Group 2\",\n\"images\": null,\n\"leader_max\": \"50\",\n\"user_max\": \"100\",\n\"user_id\": 1,\n\"description\": \"Big Group\",\n\"status\": \"30\",\n\"lag\": \"0.00000000\",\n\"long\": \"0.00000000\",\n\"created_at\": \"2016-09-23 08:22:38\",\n\"updated_at\": \"2016-09-28 08:11:04\"\n},\n\"message\": \"Succesfully.\",\n\"error\": 0\n}",
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
    "url": "api.group.join.post.create",
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
          }
        ]
      },
      "examples": [
        {
          "title": "Response:",
          "content": "{\n  \"status\": 201,\n  \"data\": null,\n  \"message\": \"Succesfully.\",\n  \"error\": 0\n  }",
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
    "url": "api.group.post.create",
    "title": "Creat Group",
    "name": "Creat_Group",
    "group": "Group",
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
            "field": "name",
            "description": "<p>Name Group</p>"
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
            "field": "user_id",
            "description": "<p>ID of User</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "Description",
            "description": "<p>of Group</p>"
          },
          {
            "group": "Success 200",
            "type": "string",
            "optional": false,
            "field": "Image",
            "description": "<p>of Group</p>"
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
          }
        ]
      },
      "examples": [
        {
          "title": "Response:",
          "content": "{\n \"status\": 201,\n \"data\": {\n \"user_id\": 1,\n \"leader_max\": \"50\",\n \"user_max\": \"50\",\n \"name\": \"Group great\",\n \"description\": \"descripton of the group\",\n \"status\": \"0\",\n \"lag\": \"15.245541\",\n \"long\": \"21.254\",\n \"updated_at\": \"2016-09-28 08:06:10\",\n \"images\": [\n     {\n         \"origin\": \"uploads/images/groups/origin/-1475049970VCstKCBvpA0qynZu.jpg\",\n         \"thumb\": \"uploads/images/groups/thumb/-1475049970VCstKCBvpA0qynZu.jpg\"\n     }\n ],\n \"created_at\": \"2016-09-28 08:06:10\",\n \"id\": 83\n },\n \"message\": \"Succesfully.\",\n \"error\": 0\n     }",
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
    "url": "api.group.get.delete",
    "title": "Delete Group",
    "name": "Delete_Group",
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
    "url": "api.group.get.leave",
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
          }
        ]
      },
      "examples": [
        {
          "title": "Response:",
          "content": "{\n  \"status\": 201,\n  \"data\": true,\n  \"message\": \"Succesfully.\",\n  \"error\": 0\n  }",
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
    "url": "api.group.get.show",
    "title": "List Group",
    "name": "List_Group",
    "group": "Group",
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
            "type": "integer",
            "optional": false,
            "field": "group_id",
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
            "field": "name",
            "description": "<p>Name of Group</p>"
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
            "type": "string",
            "optional": false,
            "field": "images",
            "description": "<p>Images of Group</p>"
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
            "field": "group_id",
            "description": "<p>ID of Group</p>"
          },
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "leader_max",
            "description": "<p>Date start of Event</p>"
          },
          {
            "group": "Success 200",
            "type": "integer",
            "optional": false,
            "field": "user_max",
            "description": "<p>The maximum number people of events</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Response:",
          "content": " {\n\"status\": 200,\n\"data\": [\n    {\n        \"id\": 1,\n        \"name\": \"My Group\",\n        \"images\": null,\n        \"leader_max\": \"4\",\n        \"user_max\": \"50\",\n        \"user_id\": 1,\n        \"description\": \"My Group \",\n        \"status\": \"1\",\n        \"lag\": \"41.00000000\",\n        \"long\": \"-74.00000000\",\n        \"created_at\": \"2016-09-15 15:34:52\",\n        \"updated_at\": \"-0001-11-30 00:00:00\"\n    },\n     {\n        \"id\": 83,\n        \"name\": \"Group great\",\n        \"images\": [\n            {\n                \"origin\": \"uploads/images/groups/origin/-1475049970VCstKCBvpA0qynZu.jpg\",\n                \"thumb\": \"uploads/images/groups/thumb/-1475049970VCstKCBvpA0qynZu.jpg\"\n            }\n        ],\n        \"leader_max\": \"50\",\n        \"user_max\": \"50\",\n        \"user_id\": 1,\n        \"description\": \"descripton of the group\",\n        \"status\": \"0\",\n        \"lag\": \"15.24554100\",\n        \"long\": \"21.25400000\",\n        \"created_at\": \"2016-09-28 08:06:10\",\n        \"updated_at\": \"2016-09-28 08:06:10\"\n    }\n],\n\"message\": \"Succesfully.\"\n}",
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
    "url": "api.group.get.show",
    "title": "View",
    "name": "View",
    "group": "Group",
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "integer",
            "optional": false,
            "field": "group_id",
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
            "description": "<p>Data Response</p>"
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
            "type": "string",
            "optional": false,
            "field": "images",
            "description": "<p>Image of Group</p>"
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
            "field": "user_id",
            "description": "<p>ID-User</p>"
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
          }
        ]
      },
      "examples": [
        {
          "title": "Response:",
          "content": "{\n \"status\": 200,\n \"data\": {\n \"id\": 62,\n \"name\": \"Group great\",\n \"images\": null,\n \"leader_max\": \"50\",\n \"user_max\": \"50\",\n \"user_id\": 1,\n \"description\": \"descripton of the group\",\n \"status\": \"1\",\n \"lag\": \"0.00000000\",\n \"long\": \"0.00000000\",\n \"created_at\": \"2016-09-23 04:42:14\",\n \"updated_at\": \"2016-09-23 04:42:14\"\n },\n \"message\": \"Succesfully.\",\n \"error\": null\n }",
          "type": "json"
        }
      ]
    },
    "version": "0.0.0",
    "filename": "app/Http/Controllers/Api/GroupsController.php",
    "groupTitle": "Group"
  }
] });
