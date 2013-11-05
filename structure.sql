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

