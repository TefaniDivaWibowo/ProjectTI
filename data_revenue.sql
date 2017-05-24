--
-- PostgreSQL database dump
--

-- Dumped from database version 9.6.3
-- Dumped by pg_dump version 9.6.3

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

--
-- Name: idpsb_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE idpsb_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE idpsb_seq OWNER TO postgres;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: data_psb; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE data_psb (
    id_psb integer DEFAULT nextval('idpsb_seq'::regclass) NOT NULL,
    mdf character(10),
    nomor_pots integer,
    nomor_speedy numeric,
    nama character(200),
    alamat text,
    odp character(100),
    ont character(100),
    stb character(100),
    layanan integer,
    jenis_kabel character(100),
    panjang_kabel integer,
    kelebihan_kabel integer,
    tiang integer,
    patch_cord integer,
    patch_cord_add integer,
    kabel_utp integer,
    kabel_utp_add integer,
    kabel_pvc integer,
    stb_kedua integer,
    tgl_va date,
    tgl_ps date,
    hasil_cek_redaman character(100),
    biaya numeric,
    wilayah character(50),
    ba_psb character(200)
);


ALTER TABLE data_psb OWNER TO postgres;

--
-- Data for Name: data_psb; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY data_psb (id_psb, mdf, nomor_pots, nomor_speedy, nama, alamat, odp, ont, stb, layanan, jenis_kabel, panjang_kabel, kelebihan_kabel, tiang, patch_cord, patch_cord_add, kabel_utp, kabel_utp_add, kabel_pvc, stb_kedua, tgl_va, tgl_ps, hasil_cek_redaman, biaya, wilayah, ba_psb) FROM stdin;
12	PKS       	34567812	152710207400	Lala                                                                                                                                                                                                    	Malang	ODP-PKS-FB/14                                                                                       	ALCLF26B345F                                                                                        	549359DE2BAF                                                                                        	1	DropCore                                                                                            	100	0	5	2	0	4	2	6	2	2017-05-11	2017-05-11	-17                                                                                                 	7424442	\N	\N
13	GDG       	34567895	152710207600	Setia                                                                                                                                                                                                   	Malang	ODP-PKS-FB/15                                                                                       	ALCLF26B345E                                                                                        	549359DE2BAC                                                                                        	3	DropCore                                                                                            	100	0	0	6	4	5	3	0	0	2017-05-11	2017-05-13	-19                                                                                                 	1208286	\N	\N
14	MLG       	34567893	152710207500	Tyas                                                                                                                                                                                                    	Madiun	ODP-PKS-FB/14                                                                                       	ALCLF26B345F                                                                                        	549359DE2BAF                                                                                        	1	DropCOre                                                                                            	300	200	0	4	2	4	2	3	0	2017-05-10	2017-05-12	-17                                                                                                 	2854323	\N	\N
15	GDG       	34567893	152710207500	Tyas                                                                                                                                                                                                    	Malang	ODP-PKS-FB/15                                                                                       	ALCLF26B345K                                                                                        	549359DE2BAL                                                                                        	1	DropCore                                                                                            	300	200	0	1	0	1	0	1	0	2015-09-09	2015-10-03	-18                                                                                                 	2824153	pasuruan                                          	\N
16	PKS       	34567890	152710207400	Justin Biebe                                                                                                                                                                                            	Madiun	ODP-PKS-FB/14                                                                                       	ALCLF26B345F                                                                                        	549359DE2BAG                                                                                        	1	DropCore                                                                                            	300	200	0	4	2	1	0	1	0	2017-05-10	2017-05-12	-19                                                                                                 	2838989	madiun                                            	\N
17	MLG       	34567893	152710207400	Tefani Diva                                                                                                                                                                                             	Malang	ODP-PKS-FB/14                                                                                       	ALCLF26B345F                                                                                        	549359DE2BAL                                                                                        	1	DropCore                                                                                            	2	0	0	1	0	1	0	1	1	2015-09-09	2015-10-03	-16                                                                                                 	1135598	madiun                                            	Imut.jpg                                                                                                                                                                                                
\.


--
-- Name: idpsb_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('idpsb_seq', 17, true);


--
-- Name: data_psb data_psb_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY data_psb
    ADD CONSTRAINT data_psb_pkey PRIMARY KEY (id_psb);


--
-- PostgreSQL database dump complete
--

