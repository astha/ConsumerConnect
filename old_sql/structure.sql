--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

SET search_path = public, pg_catalog;

--
-- Name: birthdate; Type: DOMAIN; Schema: public; Owner: postgres
--

CREATE DOMAIN birthdate AS date
	CONSTRAINT birthdate_check CHECK ((VALUE <= now()));


ALTER DOMAIN public.birthdate OWNER TO postgres;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: Answer; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE "Answer" (
    "QuestionID" integer NOT NULL,
    "AnswerID" integer NOT NULL,
    "Description" character varying(2000) NOT NULL,
    "Timestamp" timestamp without time zone NOT NULL
);


ALTER TABLE public."Answer" OWNER TO postgres;

--
-- Name: Answer_AnswerID_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE "Answer_AnswerID_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."Answer_AnswerID_seq" OWNER TO postgres;

--
-- Name: Answer_AnswerID_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE "Answer_AnswerID_seq" OWNED BY "Answer"."AnswerID";


--
-- Name: Answer_QuestionID_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE "Answer_QuestionID_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."Answer_QuestionID_seq" OWNER TO postgres;

--
-- Name: Answer_QuestionID_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE "Answer_QuestionID_seq" OWNED BY "Answer"."QuestionID";


--
-- Name: Appointment; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE "Appointment" (
    "CustomerUserID" integer NOT NULL,
    "ServiceID" integer NOT NULL,
    "ServiceProviderUserID" integer NOT NULL,
    "RegionID" integer NOT NULL,
    "Price" integer NOT NULL,
    "Status" character varying NOT NULL,
    "StartDate" date,
    "EndDate" date,
    "Days" character varying,
    "StartTime" time without time zone,
    "EndTime" time without time zone,
    CONSTRAINT dates CHECK (("EndDate" > "StartDate")),
    CONSTRAINT "time" CHECK (("EndTime" > "StartTime"))
);


ALTER TABLE public."Appointment" OWNER TO postgres;

--
-- Name: Appointment_CustomerUserID_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE "Appointment_CustomerUserID_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."Appointment_CustomerUserID_seq" OWNER TO postgres;

--
-- Name: Appointment_CustomerUserID_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE "Appointment_CustomerUserID_seq" OWNED BY "Appointment"."CustomerUserID";


--
-- Name: Appointment_RegionID_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE "Appointment_RegionID_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."Appointment_RegionID_seq" OWNER TO postgres;

--
-- Name: Appointment_RegionID_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE "Appointment_RegionID_seq" OWNED BY "Appointment"."RegionID";


--
-- Name: Appointment_ServiceID_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE "Appointment_ServiceID_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."Appointment_ServiceID_seq" OWNER TO postgres;

--
-- Name: Appointment_ServiceID_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE "Appointment_ServiceID_seq" OWNED BY "Appointment"."ServiceID";


--
-- Name: Appointment_ServiceProviderUserID_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE "Appointment_ServiceProviderUserID_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."Appointment_ServiceProviderUserID_seq" OWNER TO postgres;

--
-- Name: Appointment_ServiceProviderUserID_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE "Appointment_ServiceProviderUserID_seq" OWNED BY "Appointment"."ServiceProviderUserID";


--
-- Name: Bids; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE "Bids" (
    "ServiceProviderUserID" integer NOT NULL,
    "WishID" integer NOT NULL,
    "CustomerUserID" integer NOT NULL,
    "BidValue" integer NOT NULL,
    "Details" character varying(2000)
);


ALTER TABLE public."Bids" OWNER TO postgres;

--
-- Name: Bids_CustomerUserID_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE "Bids_CustomerUserID_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."Bids_CustomerUserID_seq" OWNER TO postgres;

--
-- Name: Bids_CustomerUserID_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE "Bids_CustomerUserID_seq" OWNED BY "Bids"."CustomerUserID";


--
-- Name: Bids_ServiceProviderUserID_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE "Bids_ServiceProviderUserID_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."Bids_ServiceProviderUserID_seq" OWNER TO postgres;

--
-- Name: Bids_ServiceProviderUserID_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE "Bids_ServiceProviderUserID_seq" OWNED BY "Bids"."ServiceProviderUserID";


--
-- Name: Bids_WishID_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE "Bids_WishID_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."Bids_WishID_seq" OWNER TO postgres;

--
-- Name: Bids_WishID_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE "Bids_WishID_seq" OWNED BY "Bids"."WishID";


--
-- Name: Customer; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE "Customer" (
    "UserID" integer NOT NULL,
    "DOB" birthdate NOT NULL,
    "CumulativeUpVotes" integer NOT NULL,
    "CumulativeDownVotes" integer NOT NULL,
    "RegionID" integer NOT NULL,
    "Gender" character varying(20) NOT NULL
);


ALTER TABLE public."Customer" OWNER TO postgres;

--
-- Name: Customer_UserID_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE "Customer_UserID_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."Customer_UserID_seq" OWNER TO postgres;

--
-- Name: Customer_UserID_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE "Customer_UserID_seq" OWNED BY "Customer"."UserID";


--
-- Name: Follows; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE "Follows" (
    "FollowerCustomerUserID" integer NOT NULL,
    "FollowedCustomerUserID" integer NOT NULL
);


ALTER TABLE public."Follows" OWNER TO postgres;

--
-- Name: Follows_FollowedCustomerUserID_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE "Follows_FollowedCustomerUserID_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."Follows_FollowedCustomerUserID_seq" OWNER TO postgres;

--
-- Name: Follows_FollowedCustomerUserID_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE "Follows_FollowedCustomerUserID_seq" OWNED BY "Follows"."FollowedCustomerUserID";


--
-- Name: Follows_FollowerCustomerUserID_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE "Follows_FollowerCustomerUserID_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."Follows_FollowerCustomerUserID_seq" OWNER TO postgres;

--
-- Name: Follows_FollowerCustomerUserID_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE "Follows_FollowerCustomerUserID_seq" OWNED BY "Follows"."FollowerCustomerUserID";


--
-- Name: Location; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE "Location" (
    "RegionID" integer NOT NULL,
    "CityName" character varying(30),
    "StateName" character varying(30),
    "CountryName" character varying(30)
);


ALTER TABLE public."Location" OWNER TO postgres;

--
-- Name: Location_RegionID_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE "Location_RegionID_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."Location_RegionID_seq" OWNER TO postgres;

--
-- Name: Location_RegionID_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE "Location_RegionID_seq" OWNED BY "Location"."RegionID";


--
-- Name: Message; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE "Message" (
    "SenderCustomerUserID" integer NOT NULL,
    "Timestamp" timestamp without time zone NOT NULL,
    "Content" character varying(2000) NOT NULL,
    "ReceiverCustomerUserID" integer NOT NULL
);


ALTER TABLE public."Message" OWNER TO postgres;

--
-- Name: Message_ReceiverCustomerUserID_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE "Message_ReceiverCustomerUserID_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."Message_ReceiverCustomerUserID_seq" OWNER TO postgres;

--
-- Name: Message_ReceiverCustomerUserID_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE "Message_ReceiverCustomerUserID_seq" OWNED BY "Message"."ReceiverCustomerUserID";


--
-- Name: Message_SenderCustomerUserID_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE "Message_SenderCustomerUserID_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."Message_SenderCustomerUserID_seq" OWNER TO postgres;

--
-- Name: Message_SenderCustomerUserID_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE "Message_SenderCustomerUserID_seq" OWNED BY "Message"."SenderCustomerUserID";


--
-- Name: Provides; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE "Provides" (
    "ServiceProviderUserID" integer NOT NULL,
    "ServiceID" integer NOT NULL,
    "RegionID" integer NOT NULL,
    "Days" character varying NOT NULL,
    "StartTime" time without time zone NOT NULL,
    "EndTime" time without time zone NOT NULL,
    "Name" character varying(40) NOT NULL,
    "Price" integer NOT NULL,
    "Discount" integer DEFAULT 0,
    "Description" character varying(2000),
    CONSTRAINT times CHECK (("EndTime" > "StartTime"))
);


ALTER TABLE public."Provides" OWNER TO postgres;

--
-- Name: Provides_RegionID_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE "Provides_RegionID_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."Provides_RegionID_seq" OWNER TO postgres;

--
-- Name: Provides_RegionID_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE "Provides_RegionID_seq" OWNED BY "Provides"."RegionID";


--
-- Name: Provides_ServiceID_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE "Provides_ServiceID_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."Provides_ServiceID_seq" OWNER TO postgres;

--
-- Name: Provides_ServiceID_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE "Provides_ServiceID_seq" OWNED BY "Provides"."ServiceID";


--
-- Name: Provides_ServiceProviderUserID_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE "Provides_ServiceProviderUserID_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."Provides_ServiceProviderUserID_seq" OWNER TO postgres;

--
-- Name: Provides_ServiceProviderUserID_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE "Provides_ServiceProviderUserID_seq" OWNED BY "Provides"."ServiceProviderUserID";


--
-- Name: QandA; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE "QandA" (
    "CustomerUserID" integer NOT NULL,
    "ServiceProviderUserID" integer NOT NULL,
    "QuestionID" integer NOT NULL
);


ALTER TABLE public."QandA" OWNER TO postgres;

--
-- Name: QandA_CustomerUserID_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE "QandA_CustomerUserID_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."QandA_CustomerUserID_seq" OWNER TO postgres;

--
-- Name: QandA_CustomerUserID_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE "QandA_CustomerUserID_seq" OWNED BY "QandA"."CustomerUserID";


--
-- Name: QandA_QuestionID_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE "QandA_QuestionID_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."QandA_QuestionID_seq" OWNER TO postgres;

--
-- Name: QandA_QuestionID_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE "QandA_QuestionID_seq" OWNED BY "QandA"."QuestionID";


--
-- Name: QandA_ServiceProviderID_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE "QandA_ServiceProviderID_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."QandA_ServiceProviderID_seq" OWNER TO postgres;

--
-- Name: QandA_ServiceProviderID_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE "QandA_ServiceProviderID_seq" OWNED BY "QandA"."ServiceProviderUserID";


--
-- Name: Question; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE "Question" (
    "QuestionID" integer NOT NULL,
    "Description" character varying(2000) NOT NULL,
    "Timestamp" timestamp without time zone NOT NULL
);


ALTER TABLE public."Question" OWNER TO postgres;

--
-- Name: Question_QuestionID_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE "Question_QuestionID_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."Question_QuestionID_seq" OWNER TO postgres;

--
-- Name: Question_QuestionID_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE "Question_QuestionID_seq" OWNED BY "Question"."QuestionID";


--
-- Name: Review; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE "Review" (
    "ReviewID" integer NOT NULL,
    "ServiceID" integer NOT NULL,
    "CustomerUserID" integer NOT NULL,
    "Content" character varying(2000) NOT NULL,
    "Rating" integer DEFAULT 0 NOT NULL,
    "Timestamp" timestamp without time zone NOT NULL,
    "ServiceProviderUserID" integer NOT NULL
);


ALTER TABLE public."Review" OWNER TO postgres;

--
-- Name: Review_CustomerUserID_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE "Review_CustomerUserID_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."Review_CustomerUserID_seq" OWNER TO postgres;

--
-- Name: Review_CustomerUserID_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE "Review_CustomerUserID_seq" OWNED BY "Review"."CustomerUserID";


--
-- Name: Review_ReviewID_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE "Review_ReviewID_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."Review_ReviewID_seq" OWNER TO postgres;

--
-- Name: Review_ReviewID_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE "Review_ReviewID_seq" OWNED BY "Review"."ReviewID";


--
-- Name: Review_ServiceID_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE "Review_ServiceID_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."Review_ServiceID_seq" OWNER TO postgres;

--
-- Name: Review_ServiceID_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE "Review_ServiceID_seq" OWNED BY "Review"."ServiceID";


--
-- Name: Service; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE "Service" (
    "ServiceID" integer NOT NULL,
    "Type" character varying(40) NOT NULL,
    "SubType" character varying(40),
    "MiniDescription" character varying(2000)
);


ALTER TABLE public."Service" OWNER TO postgres;

--
-- Name: ServiceProvider; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE "ServiceProvider" (
    "UserID" integer NOT NULL,
    "Webpage" character varying(60)
);


ALTER TABLE public."ServiceProvider" OWNER TO postgres;

--
-- Name: ServiceProvider_UserID_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE "ServiceProvider_UserID_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."ServiceProvider_UserID_seq" OWNER TO postgres;

--
-- Name: ServiceProvider_UserID_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE "ServiceProvider_UserID_seq" OWNED BY "ServiceProvider"."UserID";


--
-- Name: Service_ServiceID_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE "Service_ServiceID_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."Service_ServiceID_seq" OWNER TO postgres;

--
-- Name: Service_ServiceID_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE "Service_ServiceID_seq" OWNED BY "Service"."ServiceID";


--
-- Name: Users; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE "Users" (
    "UserID" integer NOT NULL,
    "LoginID" character varying(20) NOT NULL,
    "Password" character varying(30) NOT NULL,
    "FirstName" character varying(20) NOT NULL,
    "LastName" character varying(20) NOT NULL,
    "EmailID" character varying(40) NOT NULL,
    "Photograph" character varying DEFAULT 'people/basic.png'::character varying NOT NULL,
    "ContactNumber" character varying(20)
);


ALTER TABLE public."Users" OWNER TO postgres;

--
-- Name: User_UserID_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE "User_UserID_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."User_UserID_seq" OWNER TO postgres;

--
-- Name: User_UserID_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE "User_UserID_seq" OWNED BY "Users"."UserID";


--
-- Name: Vote; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE "Vote" (
    "ReviewID" integer NOT NULL,
    "CustomerUserID" integer NOT NULL,
    "VotedByCustomerUserID" integer NOT NULL,
    "TypeOfVote" integer NOT NULL
);


ALTER TABLE public."Vote" OWNER TO postgres;

--
-- Name: Vote_ReviewID_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE "Vote_ReviewID_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."Vote_ReviewID_seq" OWNER TO postgres;

--
-- Name: Vote_ReviewID_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE "Vote_ReviewID_seq" OWNED BY "Vote"."ReviewID";


--
-- Name: Vote_ServiceID_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE "Vote_ServiceID_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."Vote_ServiceID_seq" OWNER TO postgres;

--
-- Name: Vote_ServiceID_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE "Vote_ServiceID_seq" OWNED BY "Vote"."CustomerUserID";


--
-- Name: Vote_VotedByCustomerUserID_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE "Vote_VotedByCustomerUserID_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."Vote_VotedByCustomerUserID_seq" OWNER TO postgres;

--
-- Name: Vote_VotedByCustomerUserID_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE "Vote_VotedByCustomerUserID_seq" OWNED BY "Vote"."VotedByCustomerUserID";


--
-- Name: Wish; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE "Wish" (
    "WishID" integer NOT NULL,
    "CustomerUserID" integer NOT NULL,
    "Description" character varying(2000),
    "MaximumPrice" integer,
    "StartDate" date,
    "EndDate" date,
    "Days" character varying,
    "StartTime" time without time zone,
    "EndTime" time without time zone,
    "ServiceID" integer NOT NULL,
    "RegionID" integer NOT NULL,
    "Timestamp" timestamp without time zone NOT NULL
);


ALTER TABLE public."Wish" OWNER TO postgres;

--
-- Name: Wish_CustomerUserID_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE "Wish_CustomerUserID_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."Wish_CustomerUserID_seq" OWNER TO postgres;

--
-- Name: Wish_CustomerUserID_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE "Wish_CustomerUserID_seq" OWNED BY "Wish"."CustomerUserID";


--
-- Name: Wish_RegionID_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE "Wish_RegionID_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."Wish_RegionID_seq" OWNER TO postgres;

--
-- Name: Wish_RegionID_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE "Wish_RegionID_seq" OWNED BY "Wish"."RegionID";


--
-- Name: Wish_ServiceID_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE "Wish_ServiceID_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."Wish_ServiceID_seq" OWNER TO postgres;

--
-- Name: Wish_ServiceID_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE "Wish_ServiceID_seq" OWNED BY "Wish"."ServiceID";


--
-- Name: Wish_WishID_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE "Wish_WishID_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public."Wish_WishID_seq" OWNER TO postgres;

--
-- Name: Wish_WishID_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE "Wish_WishID_seq" OWNED BY "Wish"."WishID";


--
-- Name: RegionID; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "Location" ALTER COLUMN "RegionID" SET DEFAULT nextval('"Location_RegionID_seq"'::regclass);


--
-- Name: QuestionID; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "Question" ALTER COLUMN "QuestionID" SET DEFAULT nextval('"Question_QuestionID_seq"'::regclass);


--
-- Name: ReviewID; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "Review" ALTER COLUMN "ReviewID" SET DEFAULT nextval('"Review_ReviewID_seq"'::regclass);


--
-- Name: ServiceID; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "Service" ALTER COLUMN "ServiceID" SET DEFAULT nextval('"Service_ServiceID_seq"'::regclass);


--
-- Name: UserID; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "Users" ALTER COLUMN "UserID" SET DEFAULT nextval('"User_UserID_seq"'::regclass);


--
-- Name: WishID; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "Wish" ALTER COLUMN "WishID" SET DEFAULT nextval('"Wish_WishID_seq"'::regclass);


--
-- Name: Answer_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY "Answer"
    ADD CONSTRAINT "Answer_pkey" PRIMARY KEY ("QuestionID", "AnswerID");


--
-- Name: Appointment_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY "Appointment"
    ADD CONSTRAINT "Appointment_pkey" PRIMARY KEY ("CustomerUserID", "ServiceID", "ServiceProviderUserID", "RegionID");


--
-- Name: Bids_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY "Bids"
    ADD CONSTRAINT "Bids_pkey" PRIMARY KEY ("ServiceProviderUserID", "WishID", "CustomerUserID");


--
-- Name: Customer_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY "Customer"
    ADD CONSTRAINT "Customer_pkey" PRIMARY KEY ("UserID");


--
-- Name: Follows_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY "Follows"
    ADD CONSTRAINT "Follows_pkey" PRIMARY KEY ("FollowerCustomerUserID", "FollowedCustomerUserID");


--
-- Name: Location_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY "Location"
    ADD CONSTRAINT "Location_pkey" PRIMARY KEY ("RegionID");


--
-- Name: Message_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY "Message"
    ADD CONSTRAINT "Message_pkey" PRIMARY KEY ("SenderCustomerUserID", "Timestamp");


--
-- Name: Provides_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY "Provides"
    ADD CONSTRAINT "Provides_pkey" PRIMARY KEY ("ServiceProviderUserID", "ServiceID", "RegionID");


--
-- Name: QandA_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY "QandA"
    ADD CONSTRAINT "QandA_pkey" PRIMARY KEY ("CustomerUserID", "ServiceProviderUserID", "QuestionID");


--
-- Name: Question_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY "Question"
    ADD CONSTRAINT "Question_pkey" PRIMARY KEY ("QuestionID");


--
-- Name: Review_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY "Review"
    ADD CONSTRAINT "Review_pkey" PRIMARY KEY ("ReviewID", "CustomerUserID");


--
-- Name: ServiceProvider_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY "ServiceProvider"
    ADD CONSTRAINT "ServiceProvider_pkey" PRIMARY KEY ("UserID");


--
-- Name: Service_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY "Service"
    ADD CONSTRAINT "Service_pkey" PRIMARY KEY ("ServiceID");


--
-- Name: User_EmailID_key; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY "Users"
    ADD CONSTRAINT "User_EmailID_key" UNIQUE ("EmailID");


--
-- Name: User_LoginID_key; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY "Users"
    ADD CONSTRAINT "User_LoginID_key" UNIQUE ("LoginID");


--
-- Name: User_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY "Users"
    ADD CONSTRAINT "User_pkey" PRIMARY KEY ("UserID");


--
-- Name: Vote_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY "Vote"
    ADD CONSTRAINT "Vote_pkey" PRIMARY KEY ("ReviewID", "CustomerUserID", "VotedByCustomerUserID");


--
-- Name: Wish_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY "Wish"
    ADD CONSTRAINT "Wish_pkey" PRIMARY KEY ("WishID", "CustomerUserID");


--
-- Name: Answer_QuestionID_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "Answer"
    ADD CONSTRAINT "Answer_QuestionID_fkey" FOREIGN KEY ("QuestionID") REFERENCES "Question"("QuestionID") MATCH FULL ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: Appointment_CustomerUserID_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "Appointment"
    ADD CONSTRAINT "Appointment_CustomerUserID_fkey" FOREIGN KEY ("CustomerUserID") REFERENCES "Customer"("UserID") MATCH FULL ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: Appointment_RegionID_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "Appointment"
    ADD CONSTRAINT "Appointment_RegionID_fkey" FOREIGN KEY ("RegionID") REFERENCES "Location"("RegionID") MATCH FULL ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: Appointment_ServiceID_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "Appointment"
    ADD CONSTRAINT "Appointment_ServiceID_fkey" FOREIGN KEY ("ServiceID") REFERENCES "Service"("ServiceID") MATCH FULL ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: Appointment_ServiceProviderUserID_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "Appointment"
    ADD CONSTRAINT "Appointment_ServiceProviderUserID_fkey" FOREIGN KEY ("ServiceProviderUserID") REFERENCES "ServiceProvider"("UserID") MATCH FULL ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: Bids_CustomerUserID_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "Bids"
    ADD CONSTRAINT "Bids_CustomerUserID_fkey" FOREIGN KEY ("CustomerUserID", "WishID") REFERENCES "Wish"("CustomerUserID", "WishID") MATCH FULL ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: Bids_ServiceProviderUserID_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "Bids"
    ADD CONSTRAINT "Bids_ServiceProviderUserID_fkey" FOREIGN KEY ("ServiceProviderUserID") REFERENCES "ServiceProvider"("UserID") MATCH FULL ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: Customer_RegionID_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "Customer"
    ADD CONSTRAINT "Customer_RegionID_fkey" FOREIGN KEY ("RegionID") REFERENCES "Location"("RegionID") MATCH FULL ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: Customer_UserID_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "Customer"
    ADD CONSTRAINT "Customer_UserID_fkey" FOREIGN KEY ("UserID") REFERENCES "Users"("UserID") MATCH FULL ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: Follows_FollowedCustomerUserID_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "Follows"
    ADD CONSTRAINT "Follows_FollowedCustomerUserID_fkey" FOREIGN KEY ("FollowedCustomerUserID") REFERENCES "Customer"("UserID") MATCH FULL ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: Follows_FollowerCustomerUserID_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "Follows"
    ADD CONSTRAINT "Follows_FollowerCustomerUserID_fkey" FOREIGN KEY ("FollowerCustomerUserID") REFERENCES "Customer"("UserID") MATCH FULL ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: Message_ReceiverCustomerUserID_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "Message"
    ADD CONSTRAINT "Message_ReceiverCustomerUserID_fkey" FOREIGN KEY ("ReceiverCustomerUserID") REFERENCES "Customer"("UserID") MATCH FULL ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: Message_SenderCustomerUserID_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "Message"
    ADD CONSTRAINT "Message_SenderCustomerUserID_fkey" FOREIGN KEY ("SenderCustomerUserID") REFERENCES "Customer"("UserID") MATCH FULL ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: Provides_RegionID_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "Provides"
    ADD CONSTRAINT "Provides_RegionID_fkey" FOREIGN KEY ("RegionID") REFERENCES "Location"("RegionID") MATCH FULL ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: Provides_ServiceID_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "Provides"
    ADD CONSTRAINT "Provides_ServiceID_fkey" FOREIGN KEY ("ServiceID") REFERENCES "Service"("ServiceID") MATCH FULL ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: Provides_ServiceProviderUserID_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "Provides"
    ADD CONSTRAINT "Provides_ServiceProviderUserID_fkey" FOREIGN KEY ("ServiceProviderUserID") REFERENCES "ServiceProvider"("UserID") MATCH FULL ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: QandA_CustomerUserID_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "QandA"
    ADD CONSTRAINT "QandA_CustomerUserID_fkey" FOREIGN KEY ("CustomerUserID") REFERENCES "Customer"("UserID") MATCH FULL ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: QandA_QuestionID_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "QandA"
    ADD CONSTRAINT "QandA_QuestionID_fkey" FOREIGN KEY ("QuestionID") REFERENCES "Question"("QuestionID") MATCH FULL ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: QandA_ServiceProviderID_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "QandA"
    ADD CONSTRAINT "QandA_ServiceProviderID_fkey" FOREIGN KEY ("ServiceProviderUserID") REFERENCES "ServiceProvider"("UserID") MATCH FULL ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: Review_CustomerUserID_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "Review"
    ADD CONSTRAINT "Review_CustomerUserID_fkey" FOREIGN KEY ("CustomerUserID") REFERENCES "Customer"("UserID") MATCH FULL ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: Review_ServiceID_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "Review"
    ADD CONSTRAINT "Review_ServiceID_fkey" FOREIGN KEY ("ServiceID") REFERENCES "Service"("ServiceID") MATCH FULL ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: ServiceProvider_UserID_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "ServiceProvider"
    ADD CONSTRAINT "ServiceProvider_UserID_fkey" FOREIGN KEY ("UserID") REFERENCES "Users"("UserID") MATCH FULL ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: Vote_ReviewID_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "Vote"
    ADD CONSTRAINT "Vote_ReviewID_fkey" FOREIGN KEY ("ReviewID", "CustomerUserID") REFERENCES "Review"("ReviewID", "CustomerUserID") MATCH FULL ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: Wish_CustomerUserID_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "Wish"
    ADD CONSTRAINT "Wish_CustomerUserID_fkey" FOREIGN KEY ("CustomerUserID") REFERENCES "Customer"("UserID") MATCH FULL ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: Wish_RegionID_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "Wish"
    ADD CONSTRAINT "Wish_RegionID_fkey" FOREIGN KEY ("RegionID") REFERENCES "Location"("RegionID") MATCH FULL ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: Wish_ServiceID_fkey; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "Wish"
    ADD CONSTRAINT "Wish_ServiceID_fkey" FOREIGN KEY ("ServiceID") REFERENCES "Service"("ServiceID") MATCH FULL ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

