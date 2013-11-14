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

SET default_tablespace = '';

SET default_with_oids = false;

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
-- Name: SenderCustomerUserID; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "Message" ALTER COLUMN "SenderCustomerUserID" SET DEFAULT nextval('"Message_SenderCustomerUserID_seq"'::regclass);


--
-- Name: ReceiverCustomerUserID; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY "Message" ALTER COLUMN "ReceiverCustomerUserID" SET DEFAULT nextval('"Message_ReceiverCustomerUserID_seq"'::regclass);


--
-- Data for Name: Message; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY "Message" ("SenderCustomerUserID", "Timestamp", "Content", "ReceiverCustomerUserID") FROM stdin;
11	2013-09-03 19:00:00	Hey! I saw your ad for Math tutor. Is Ronak not doing good in studies?	22
50	2013-02-01 13:00:00	Hey! I saw your ad for Math tutor. Is Ronak not doing good in studies?	38
51	2013-03-07 23:00:00	Hey! I saw your ad for Math tutor. Is Ronak not doing good in studies?	50
27	2013-05-05 13:00:00	Hey! I saw your ad for Math tutor. Is Ronak not doing good in studies?	58
51	2013-04-07 19:00:00	Hey! I saw your ad for Math tutor. Is Ronak not doing good in studies?	40
33	2013-08-04 18:00:00	Hey! I saw your ad for Math tutor. Is Ronak not doing good in studies?	33
45	2013-05-07 20:00:00	Hey! I saw your ad for Math tutor. Is Ronak not doing good in studies?	41
3	2013-08-06 12:00:00	Hey! I saw your ad for Math tutor. Is Ronak not doing good in studies?	45
33	2013-05-06 00:00:00	Hey! I saw your ad for Math tutor. Is Ronak not doing good in studies?	52
11	2013-06-09 17:00:00	Hey! I saw your ad for Math tutor. Is Ronak not doing good in studies?	23
58	2013-03-04 15:00:00	Hey! I saw your ad for Math tutor. Is Ronak not doing good in studies?	22
46	2013-08-02 14:00:00	Hey! I saw your ad for Math tutor. Is Ronak not doing good in studies?	4
33	2013-02-05 07:00:00	Hey! I saw your ad for Math tutor. Is Ronak not doing good in studies?	45
24	2013-07-07 10:00:00	Hey! I saw your ad for Math tutor. Is Ronak not doing good in studies?	48
5	2013-08-05 18:00:00	Hey! I saw your ad for Math tutor. Is Ronak not doing good in studies?	52
5	2013-07-07 06:00:00	Hey! I saw your ad for Math tutor. Is Ronak not doing good in studies?	6
4	2013-01-07 08:00:00	Hey! I saw your ad for Math tutor. Is Ronak not doing good in studies?	34
45	2013-05-01 13:00:00	Hey! I saw your ad for Math tutor. Is Ronak not doing good in studies?	22
41	2013-05-07 12:00:00	Hey! I saw your ad for Math tutor. Is Ronak not doing good in studies?	24
33	2013-03-03 14:00:00	Hey! I saw your ad for Math tutor. Is Ronak not doing good in studies?	38
27	2013-05-04 12:00:00	Hey! I saw your ad for Math tutor. Is Ronak not doing good in studies?	50
31	2013-08-02 17:00:00	Hey! I saw your ad for Math tutor. Is Ronak not doing good in studies?	53
48	2013-09-04 16:00:00	Hey! I saw your ad for Math tutor. Is Ronak not doing good in studies?	34
34	2013-09-04 12:00:00	Hey! I saw your ad for Math tutor. Is Ronak not doing good in studies?	31
15	2013-04-04 21:00:00	Hey! I saw your ad for Math tutor. Is Ronak not doing good in studies?	31
5	2013-05-01 13:00:00	Hey! I saw your ad for Math tutor. Is Ronak not doing good in studies?	24
3	2013-07-03 18:00:00	Hey! I saw your ad for Math tutor. Is Ronak not doing good in studies?	52
33	2013-03-02 15:00:00	Hey! I saw your ad for Math tutor. Is Ronak not doing good in studies?	53
41	2013-02-02 06:00:00	Hey! I saw your ad for Math tutor. Is Ronak not doing good in studies?	31
3	2013-02-09 20:00:00	Hey! I saw your ad for Math tutor. Is Ronak not doing good in studies?	38
46	2013-01-06 20:00:00	Hey! I saw your ad for Math tutor. Is Ronak not doing good in studies?	33
45	2013-09-04 18:00:00	Hey! I saw your ad for Math tutor. Is Ronak not doing good in studies?	46
23	2013-02-08 04:00:00	Hey! I saw your ad for Math tutor. Is Ronak not doing good in studies?	50
58	2013-07-04 15:00:00	Hey! I saw your ad for Math tutor. Is Ronak not doing good in studies?	11
24	2013-02-07 14:00:00	Hey! I saw your ad for Math tutor. Is Ronak not doing good in studies?	15
26	2013-02-05 03:00:00	Hey! I saw your ad for Math tutor. Is Ronak not doing good in studies?	52
54	2013-04-03 20:00:00	Hey! I saw your ad for Math tutor. Is Ronak not doing good in studies?	26
33	2013-03-09 14:00:00	Hey! I saw your ad for Math tutor. Is Ronak not doing good in studies?	11
34	2013-08-04 16:00:00	Hey! I saw your ad for Math tutor. Is Ronak not doing good in studies?	50
24	2013-08-05 01:00:00	Hey! I saw your ad for Math tutor. Is Ronak not doing good in studies?	23
23	2013-03-01 11:00:00	Hey! I saw your ad for Math tutor. Is Ronak not doing good in studies?	50
\.


--
-- Name: Message_ReceiverCustomerUserID_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('"Message_ReceiverCustomerUserID_seq"', 1, false);


--
-- Name: Message_SenderCustomerUserID_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('"Message_SenderCustomerUserID_seq"', 1, false);


--
-- Name: Message_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY "Message"
    ADD CONSTRAINT "Message_pkey" PRIMARY KEY ("SenderCustomerUserID", "Timestamp");


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
-- PostgreSQL database dump complete
--

