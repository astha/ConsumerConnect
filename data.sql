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
-- Data for Name: Question; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY "Question" ("QuestionID", "Description", "Timestamp") FROM stdin;
0	Why dont you extend the services 24 by 7?	2013-06-02 22:00:00
1	What oil do you use for your chocolate cookies? Is it bad for heart patients?	2013-06-08 15:00:00
\.


--
-- Data for Name: Answer; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY "Answer" ("QuestionID", "AnswerID", "Description", "Timestamp") FROM stdin;
0	0	Because we dont have required resources. We are working on it.	2013-02-03 08:00:00
1	1	We use vegetable oils with almond, vanilla and chocolate extracts. I would not recommend a high quantity of the cookies for heart patients.	2013-08-03 01:00:00
\.


--
-- Name: Answer_AnswerID_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('"Answer_AnswerID_seq"', 1, false);


--
-- Name: Answer_QuestionID_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('"Answer_QuestionID_seq"', 1, false);


--
-- Data for Name: Location; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY "Location" ("RegionID", "CityName", "StateName", "CountryName") FROM stdin;
0	Ahmedabad	Gujarat	India
1	Agra	Uttar Pradesh	India
2	Aurangabad	Maharashtra	India
3	Allahabad	Uttar Pradesh	India
4	Amritsar	Punjab	India
5	Aligarh	Uttar Pradesh	India
6	Arwal	Bihar	India
7	Amravati	Maharashtra	India
8	Asansol	West Bengal	India
9	Ajmer	Rajasthan	India
10	Akola	Maharashtra	India
11	Ahmednagar	Maharashtra	India
12	Alappuzha	Kerala	India
13	Adoni	Andhra Pradesh	India
14	Anantapur	Andhra Pradesh	India
15	Aizawl	Mizoram	India
16	Anand	Gujarat	India
17	Arrah	Bihar	India
18	Agartala	Tripura	India
19	Amroha	Uttar Pradesh	India
20	Alwar	Rajasthan	India
21	Adilabad	Andhra Pradesh	India
22	Achalpur	Maharashtra	India
23	Anantnag	Jammu and Kashmir	India
24	Amreli	Gujarat	India
25	Azamgarh	Uttar Pradesh	India
26	Amalner	Maharashtra	India
27	Ambikapur	Chhattisgarh	India
28	Anakapalle	Andhra Pradesh	India
29	Aruppukkottai	Tamil Nadu	India
30	Arakkonam	Tamil Nadu	India
31	Akot	Maharashtra	India
32	Aurangabad	Bihar	India
33	Alipurduar	West Bengal	India
34	Ambejogai	Maharashtra	India
35	Anjar	Gujarat	India
36	Ankleshwar	Gujarat	India
37	Ashok Nagar	Madhya Pradesh	India
38	Araria	Bihar	India
39	Arambagh	West Bengal	India
40	Amalapuram	Andhra Pradesh	India
41	Anjangaon	Maharashtra	India
42	Arsikere	Karnataka	India
43	Athni	Karnataka	India
44	Arvi	Maharashtra	India
45	Akkalkot	Maharashtra	India
46	Anugul	Odisha	India
47	Amadalavalasa	Andhra Pradesh	India
48	Ahmedpur	Maharashtra	India
49	Attingal	Kerala	India
50	Aroor	Kerala	India
51	Ariyalur	TamilNadu	India
52	Alandha	Karnataka	India
53	Anandapur	Odisha	India
54	Ashta	Maharashtra	India
55	Anekal	Karnataka	India
56	Almora	Uttarakhand	India
57	Ausa	Maharashtra	India
58	Adoor	Kerala	India
59	Amli	Dadra and Nagar Haveli	India
60	Ahmedgarh	Punjab	India
61	Ankola	Karnataka	India
62	Ambad	Maharashtra	India
63	Annigeri	Karnataka	India
64	Assandh	Haryana	India
65	Adra	West Bengal	India
66	Ancharakandy	Kerala	India
67	Amarpur	Bihar	India
68	Asika	Odisha	India
69	Akaltara	Chhattisgarh	India
70	Areraj	Bihar	India
71	Achhnera	Uttar Pradesh	India
72	Bhopal	Madhya Pradesh	India
73	Belgaum	Karnataka	India
74	Bhubaneswar*	Odisha	India
75	Bhavnagar	Gujarat	India
76	Bokaro Steel City	Jharkhand	India
77	Bhagalpur	Bihar	India
78	Bilaspur	Chhattisgarh	India
79	Bihar Sharif	Bihar	India
80	Bankura	West Bengal	India
81	Bathinda	Punjab	India
82	Bhiwani	Haryana	India
83	Bahraich	Uttar Pradesh	India
84	Baharampur	West Bengal	India
85	Baleshwar	Odisha	India
86	Batala	Punjab	India
87	Bhimavaram	Andhra Pradesh	India
88	Bahadurgarh	Haryana	India
89	Bettiah	Bihar	India
90	Bongaigaon	Assam	India
91	Begusarai	Bihar	India
92	Baripada	Odisha	India
93	Barnala	Punjab	India
94	Bangalore	Karnataka	India
95	Bhadrak	Odisha	India
96	Bagaha	Bihar	India
97	Bageshwar	Uttarakhand	India
98	Balangir	Odisha	India
99	Buxar	Bihar	India
100	Baramula	Jammu and Kashmir	India
101	Brajrajnagar	Odisha	India
102	Balaghat	Madhya Pradesh	India
103	Bodhan	Andhra Pradesh	India
104	Bapatla	Andhra Pradesh	India
105	Bellampalle	Andhra Pradesh	India
106	Bargarh	Odisha	India
107	Bhawanipatna	Odisha	India
108	Barbil	Odisha	India
109	Bhongir	Andhra Pradesh	India
110	Bhatapara	Chhattisgarh	India
111	Bobbili	Andhra Pradesh	India
112	Coimbatore	Tamil Nadu	India
113	Chandigarh*	Chandigarh	India
114	Cuttack	Odisha	India
115	Cuddapah	Andhra Pradesh	India
116	Chhapra	Bihar	India
117	Chirala	Andhra Pradesh	India
118	Chittoor	Andhra Pradesh	India
119	Cherthala	Kerala	India
120	Chirkunda	Jharkhand	India
121	Chinsura	West Bengal	India
122	Chirmiri	Chhattisgarh	India
123	Chilakaluripet	Andhra Pradesh	India
124	Chittur-Thathamangalam	Kerala	India
125	Chaibasa	Jharkhand	India
126	Chakradharpur	Jharkhand	India
127	Changanassery	Kerala	India
128	Chalakudy	Kerala	India
129	Charkhi Dadri	Haryana	India
130	Chatra	Jharkhand	India
131	Champa	Chhattisgarh	India
132	Chinna salem	Tamil nadu	India
133	Chikkodi	Karnataka	India
134	Delhi	Delhi	India
135	Dombivli	Maharashtra	India
136	Dhanbad	Jharkhand	India
137	Durg-Bhilai Nagar	Chhattisgarh	India
138	Dehradun	Uttarakhand	India
139	Davanagere	Karnataka	India
140	Dimapur	Nagaland	India
141	Dhule	Maharashtra	India
142	Darbhanga	Bihar	India
143	Dibrugarh	Assam	India
144	Dhuri	Punjab	India
145	Dehri-on-Sone	Bihar	India
146	Deoghar	Jharkhand	India
147	Dharmavaram	Andhra Pradesh	India
148	Deesa	Gujarat	India
149	Dhamtari	Chhattisgarh	India
150	Dahod	Gujarat	India
151	Dhampur	Uttar Pradesh	India
152	Daltonganj	Jharkhand	India
153	Dhubri	Assam	India
154	Dhenkanal	Orissa	India
155	Erode	Tamil Nadu	India
156	Eluru	Andhra Pradesh	India
157			India
158	Faridabad	Haryana	India
159	Firozpur	Punjab	India
160	Faridkot	Punjab	India
161	Fazilka	Punjab	India
162	Fatehabad	Haryana	India
163	Firozpur Cantt.	Punjab	India
164	Guwahati	Assam	India
165	Gulbarga	Karnataka	India
166	Guntur	Andhra Pradesh	India
167	Gaya	Bihar	India
168	Gurgaon	Haryana	India
169	Guruvayoor	Kerala	India
170	Guntakal	Andhra Pradesh	India
171	Gudivada	Andhra Pradesh	India
172	Giridih	Jharkhand	India
173	Gokak	Karnataka	India
174	Gudur	Andhra Pradesh	India
175	Gurdaspur	Punjab	India
176	Gobindgarh	Punjab	India
177	Gobichettipalayam	Tamil Nadu	India
178	Gopalganj	Bihar	India
179	Gadwal	Andhra Pradesh	India
180	Hyderabad*	Andhra Pradesh	India
181	Hisar	Haryana	India
182	Haridwar	Uttarakhand	India
183	Hapur	Uttar Pradesh	India
184	Hugli-Chuchura	West Bengal	India
185	Haldwani	Uttarakhand	India
186	Hoshiarpur	Punjab	India
187	Hazaribag	Jharkhand	India
188	Hindupur	Andhra Pradesh	India
189	Hajipursscsc	Bihar	India
190	Hansi	Haryana	India
191	Indore	Madhya Pradesh	India
192	Ichalkaranji	Maharashtra	India
193	Imphal*	Manipur	India
194	Itarsi	Madhya Pradesh	India
195	Jamalpur	Bihar	India
196	Jagtial	Andhra Pradesh	India
197	Jehanabad	Bihar	India
198	Jeypur	Odisha	India
199	Jharsuguda	Odisha	India
200	Jalandhar	Punjab	India
201	Jhumri Tilaiya	Jharkhand	India
202	Jamui	Bihar	India
203	Jajmau	Uttar Pradesh	India
204	Jammu	Jammu and Kashmir	India
205	Jagraon	Punjab	India
206	Jatani	Odisha	India
207	Jhargram	West Bengal	India
208	Jhansi	Uttar Pradesh	India
209	Kolkata	West Bengal	India
210	Kanpur	Uttar Pradesh	India
211	Kalyan	Maharashtra	India
212	Kochi	Kerala	India
213	Karnal	Haryana	India
214	Kozhikode	Kerala	India
215	Kannur	Kerala	India
216	Kurnool	Andhra Pradesh	India
217	Kollam	Kerala	India
218	Kakinada	Andhra Pradesh	India
219	Kharagpur	West Bengal	India
220	Korba	Chhattisgarh	India
221	Karimnagar	Andhra Pradesh	India
222	karjat	maharashtra	India
223	Khammam	Andhra Pradesh	India
224	Katihar	Bihar	India
225	Kottayam	Kerala	India
226	Karur	Tamil Nadu	India
227	Kanhangad	Kerala	India
228	Kaithal	Haryana	India
229	Kalpi	Uttar Pradesh	India
230	Kothagudem	Andhra Pradesh	India
231	Khanna	Punjab	India
232	Kodungallur	Kerala	India
233	Khambhat	Gujarat	India
234	Kashipur	Uttarakhand	India
235	Kapurthala	Punjab	India
236	Kavali	Andhra Pradesh	India
237	Kishanganj	Bihar	India
238	Kot Kapura	Punjab	India
239	Lucknow*	Uttar Pradesh	India
240	Ludhiana	Punjab	India
241	Latur	Maharashtra	India
242	Lakhimpur	Uttar Pradesh	India
243	Loni	Uttar Pradesh	India
244	Lalitpur	Uttar Pradesh	India
245	Lakhisarai	Bihar	India
246	Mumbai	Maharashtra	India
247	Meerut	Uttar Pradesh	India
248	Madurai	Tamil Nadu	India
249	Mysore	Karnataka	India
250	Mangalore	Karnataka	India
251	Mira-Bhayandar	Maharashtra	India
252	Malegaon	Maharashtra	India
253	Nagpur	Maharashtra	India
254	Nashik	Maharashtra	India
255	Navi Mumbai	Maharashtra	India
256	Nanded-Waghala	Maharashtra	India
257	Nellore	Andhra Pradesh	India
258	Noida	Uttar Pradesh	India
259	Nizamabad	Andhra Pradesh	India
260	New Delhi*	Delhi	India
261	Navsari	Gujarat	India
262	Naihati	West Bengal	India
263	Nagercoil	Tamil Nadu	India
264	Orai	Uttar Pradesh	India
265	Oddanchatram	Tamil Nadu	India
267			India
268	Pune	Maharashtra	India
269	Patna*	Bihar	India
270	Pondicherry*	Puducherry	India
271	Patiala	Punjab	India
272	Panipat	Haryana	India
273	Parbhani	Maharashtra	India
274	Panvel	Maharashtra	India
275	Porbandar	Gujarat	India
276	Palakkad	Kerala	India
277	Purnia	Bihar	India
278	Pali	Rajasthan	India
279	Phusro	Jharkhand	India
280	Pathankot	Punjab	India
281	Puri	Odisha	India
282	Proddatur	Andhra Pradesh	India
283	Panchkula	Haryana	India
284	Pollachi	Tamil Nadu	India
285	Pilibhit	Uttar Pradesh	India
286	Palanpur	Gujarat	India
287	Purulia	West Bengal	India
288	Patan	Gujarat	India
289	Pudukkottai	Tamil Nadu	India
290	Phagwara	Punjab	India
291	Palwal	Haryana	India
292	Port Blair*	Andaman and Nicobar Islands	India
293	Panaji*	Goa	India
294	Pandharpur	Maharashtra	India
295	Parli	Maharashtra	India
296	Ponnani	Kerala	India
297	Paramakudi	Tamil Nadu	India
298	Rajkot	Gujarat	India
299	Ratlam	Madhya Pradesh	India
300	Ranchi*	Jharkhand	India
301	Raipur*	Chhattisgarh	India
302	Raurkela	Odisha	India
303	Rajahmundry	Andhra Pradesh	India
304	Raghunathganj	West Bengal	India
305	Rohtak	Haryana	India
306	Rampur	Uttar Pradesh	India
307	Ranipet	Tamil Nadu	India
308	Ramagundam	Andhra Pradesh	India
309	Raayachuru	Karnataka	India
310	Rewa	Madhya Pradesh	India
311	Raiganj	West Bengal	India
312	Rae Bareli	Uttar Pradesh	India
313	Robertson Pet	Karnataka	India
314	Ranaghat	West Bengal	India
315	Rajnandgaon	Chhattisgarh	India
316	Rajapalayam	Tamil Nadu	India
317	Raigarh	Chhattisgarh	India
318	Roorkee	Uttarakhand	India
319	Ramngarh	Jharkhand	India
320	Rajampet	Andhra Pradesh	India
321	Rewari	Haryana	India
322	Ranibennur	Karnataka	India
323	Rudrapur	Uttarakhand	India
324	Rajpura	Punjab	India
325	Raamanagara	Karnataka	India
326	Rishikesh	Uttarakhand	India
327	Rayachoti	Andhra Pradesh	India
328	Ratnagiri	Maharashtra	India
329	Rabakavi Banahatti	Karnataka	India
330	Rajkot	Gujarat	India
331	Ratlam	Madhya Pradesh	India
332	Ranchi*	Jharkhand	India
333	Raipur*	Chhattisgarh	India
334	Raurkela	Odisha	India
335	Rajahmundry	Andhra Pradesh	India
336	Raghunathganj	West Bengal	India
337	Rohtak	Haryana	India
338	Rampur	Uttar Pradesh	India
339	Ranipet	Tamil Nadu	India
340	Ramagundam	Andhra Pradesh	India
341	Raayachuru	Karnataka	India
342	Rewa	Madhya Pradesh	India
343	Raiganj	West Bengal	India
344	Rae Bareli	Uttar Pradesh	India
345	Robertson Pet	Karnataka	India
346	Ranaghat	West Bengal	India
347	Rajnandgaon	Chhattisgarh	India
348	Rajapalayam	Tamil Nadu	India
349	Raigarh	Chhattisgarh	India
350	Roorkee	Uttarakhand	India
351	Ramngarh	Jharkhand	India
352	Rajampet	Andhra Pradesh	India
353	Rewari	Haryana	India
354	Ranibennur	Karnataka	India
355	Rudrapur	Uttarakhand	India
356	Rajpura	Punjab	India
357	Raamanagara	Karnataka	India
358	Rishikesh	Uttarakhand	India
359	Rayachoti	Andhra Pradesh	India
360	Ratnagiri	Maharashtra	India
361	Rabakavi Banahatti	Karnataka	India
362	Surat	Gujarat	India
363	Siliguri	West Bengal	India
364	Srinagar*	Jammu and Kashmir	India
365	Solapur	Maharashtra	India
366	Salem	Tamil Nadu	India
367	Saharanpur	Uttar Pradesh	India
368	Sangli	Maharashtra	India
369	Shahjahanpur	Uttar Pradesh	India
370	Sagar	Madhya Pradesh	India
371	Shivamogga	Karnataka	India
372	Shillong*	Meghalaya	India
373	Satna	Madhya Pradesh	India
374	Sambalpur	Odisha	India
375	Sonipat	Haryana	India
376	Sikar	Rajasthan	India
377	Singrauli	Madhya Pradesh	India
378	Silchar	Assam	India
379	Sambhal	Uttar Pradesh	India
380	Sirsa	Haryana	India
381	Sitapur	Uttar Pradesh	India
382	Shivpuri	Madhya Pradesh	India
383	Shimla*	Himachal Pradesh	India
384	Santipur	West Bengal	India
385	Sasaram	Bihar	India
386	Saharsa	Bihar	India
387	Sadulpur	Rajasthan	India
388	Sivakasi	Tamil Nadu	India
389	Srikakulam	Andhra Pradesh	India
390	Siwan	Bihar	India
391	Satara	Maharashtra	India
392	Sawai Madhopur	Rajasthan	India
393	Sultanpur	Uttar Pradesh	India
394	Sarni	Madhya Pradesh	India
395	Suryapet	Andhra Pradesh	India
396	Sehore	Madhya Pradesh	India
397	Shamli	Uttar Pradesh	India
398	Seoni	Madhya Pradesh	India
399	Shrirampur	Maharashtra	India
400	Shikohabad	Uttar Pradesh	India
401	Sitamarhi	Bihar	India
402	Saunda	Jharkhand	India
403	Sujangarh	Rajasthan	India
404	Sardarshahar	Rajasthan	India
405	Sahibganj	Jharkhand	India
406	Thane	Maharashtra	India
407	Trivandrum	Kerala	India
408	Tiruchirappalli	Tamil Nadu	India
409	Tiruppur	Tamil Nadu	India
410	Tirunelveli	Tamil Nadu	India
411	Thoothukudi	Tamil Nadu	India
412	Thrissur	Kerala	India
413	Tirupati	Andhra Pradesh	India
414	Tiruvannamalai	Tamil Nadu	India
415	Thumakooru	Karnataka	India
416	Thanjavur	Tamil Nadu	India
417	Tenali	Andhra Pradesh	India
418	Tonk	Rajasthan	India
419	Thanesar	Haryana	India
420	Tinsukia	Assam	India
421	Tezpur	Assam	India
422	Tadepalligudem	Andhra Pradesh	India
423	Tiruchendur	Tamil Nadu	India
424	Tadpatri	Andhra Pradesh	India
425	Theni Allinagaram	Tamil Nadu	India
426	Tanda	Uttar Pradesh	India
427	Tiruchengode	Tamil Nadu	India
428	Vadodara	Gujarat	India
429	Visakhapatnam	Andhra Pradesh	India
430	Varanasi	Uttar Pradesh	India
431	Vijayawada	Andhra Pradesh	India
432	Vellore	Tamil Nadu	India
433	Vizianagaram	Andhra Pradesh	India
434	Vasai	Maharashtra	India
435	Veraval	Gujarat	India
436	Valsad	Gujarat	India
437	Vidisha	Madhya Pradesh	India
438	Vadakara	Kerala	India
439	Virar	Maharashtra	India
440	Vaniyambadi	Tamil Nadu	India
441	Viluppuram	Tamil Nadu	India
442	Valparai	Tamil Nadu	India
443	Warangal	Andhra Pradesh	India
444	Wadhwan	Gujarat	India
445	Wardha	Maharashtra	India
446	Washim	Maharashtra	India
\.


--
-- Data for Name: Users; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY "Users" ("UserID", "LoginID", "Password", "FirstName", "LastName", "EmailID", "Photograph", "ContactNumber") FROM stdin;
3	aadhira	MF25OXk8j	Aadhira	Mukopadhyay	aadhira@gmail.com		11491-24078
4	aaloka	85W8sSAS52	Aaloka	Bhatnagar	aaloka@gmail.com		90161-04037
5	aashi	J3COln57	Aashi	Shah	aashi@gmail.com		90495-83522
6	aashirya	71ndCB04	Aashirya	Gupta	aashirya@gmail.com		34682-45952
7	abha	39F9tMKG49	Abha	Rao	abha@yahoo.com		63606-01156
8	abhilasha	79jhZS86	Abhilasha	Goyal	abhilasha@rediffmail.com		15111-57562
9	achala	54L4vJTF04	Achala	Shah	achala@college.in		32428-83190
10	adhika	24iyQC30	Adhika	Chauhan	adhika@rediffmail.com		93199-73670
11	adhira	14ziIZ07	Adhira	Chopra	adhira@fanmail.com		32087-41894
12	adhita	X0QZwj30	Adhita	Jayaraman	adhita@gmail.com		67730-26087
13	aditi	94R7vTZN78	Aditi	Rangarajan	aditi@iitb.ac.in		22484-88728
14	adrika	48wfEQ94	Adrika	Yadav	adrika@yahoo.com		75821-50955
15	ahalya	Y8GGqe71	Ahalya	Mehra	ahalya@rediffmail.com		14272-42754
16	aisha	48gyAH37	Aisha	Sen	aisha@gmail.com		86825-64836
17	aishani	02dwMS59	Aishani	Chavan	aishani@yahoo.com		94148-43464
18	aishwarya	25biAX83	Aishwarya	Kadam	aishwarya@yahoo.com		58502-43245
19	ajalaa	42S9iAKQ28	Ajalaa	Balasubramanium	ajalaa@iitb.ac.in		44784-90347
20	ajanta	RY01YCl3u	Ajanta	Nair	ajanta@gmail.com		38089-48821
21	akhila	E5SGvw37	Akhila	Mistry	akhila@yahoo.com		94427-55639
22	akriti	U1LBag96	Akriti	Chauhan	akriti@college.in		81538-82719
23	akshita	37ijNL27	Akshita	Malhotra	akshita@gmail.com		45903-13337
24	akuti	13hfIG67	Akuti	Chavan	akuti@yahoo.com		56329-77404
25	alisha	57F3pRGE62	Alisha	Mohammad	alisha@rediffmail.com		90409-43423
26	alka	BK10WLm1u	Alka	Malhotra	alka@rediffmail.com		37974-79109
27	alpana	63mgYO32	Alpana	Kansal	alpana@college.in		32336-43588
28	amba	66ybXU57	Amba	Mukopadhyay	amba@gmail.com		15612-78679
29	amber	AE79YEq2k	Amber	Chauhan	amber@rediffmail.com		45795-53404
31	bairavi	X4NQbt18	Bairavi	Rao	bairavi@yahoo.com		81102-79746
32	bala	UE39GNr1i	Bala	Rangarajan	bala@gmail.com		84716-37263
33	banhi	24K3jRQY36	Banhi	Subramanium	banhi@gmail.com		72216-63737
34	banita	67uhKE07	Banita	Sarin	banita@fanmail.com		20857-57945
35	barkha	FP73FVr5s	Barkha	Goel	barkha@yahoo.com		28123-19956
36	basanti	52B8wMFL17	Basanti	Goel	basanti@yahoo.com		45261-09386
37	bela	29P6lAAC32	Bela	Dasgupta	bela@gmail.com		92413-30754
38	bhagirathi	63D6bJKN43	Bhagirathi	Malhotra	bhagirathi@gmail.com		87963-50010
39	bhagyalakshmi	59ynUJ16	Bhagyalakshmi	Bansal	bhagyalakshmi@yahoo.com		26148-85120
40	bhagyashree	D8BHhw17	Bhagyashree	Shree	bhagyashree@yahoo.com		96549-35666
41	bhairavi	MG53ZOb6a	Bhairavi	Pawar	bhairavi@rediffmail.com		96527-43062
42	bhakti	11N3zYSA69	Bhakti	Malik	bhakti@yahoo.com		66675-95925
43	chanchal	H0MClq48	Chanchal	Das	chanchal@fanmail.com		82046-03309
44	chanda	VN38XZx2j	Chanda	Mistry	chanda@gmail.com		48879-66806
45	chandani	27F9zLDI19	Chandani	Mehta	chandani@gmail.com		22598-88787
46	chandika	GT78POm4t	Chandika	Chauhan	chandika@gmail.com		57797-33686
47	chandrakala	KW99FXj9e	Chandrakala	Saxena	chandrakala@rediffmail.com		16057-38498
48	chandrakanta	95abUP03	Chandrakanta	Banerjee	chandrakanta@college.in		96785-98999
49	chandrima	71hqRL99	Chandrima	Kansal	chandrima@gmail.com		78437-87528
50	charita	88J3mTAS47	Charita	Jhadav	charita@yahoo.com		67669-36794
51	charu	93dvSV66	Charu	Nair	charu@gmail.com		30381-12917
52	charulata	DH53GIa9c	Charulata	Subramanium	charulata@gmail.com		34828-00586
53	charulekha	XR81NWe0s	Charulekha	Chattopadhyay	charulekha@gmail.com		41603-55662
54	charusmita	P4XQtl14	Charusmita	Jaiteley	charusmita@gmail.com		82818-13123
55	charvi	91xuIT96	Charvi	Sheikh	charvi@yahoo.com		13400-31513
56	cheshta	65vxZD02	Cheshta	Kadam	cheshta@yahoo.com		86142-15919
57	dhwani	BH93OOq9e	Dhwani	Garg	dhwani@college.in		83031-31028
58	diksha	X8AMdx69	Diksha	Mehta	diksha@gmail.com		37826-13965
59	dipashri	21ucJE27	Dipashri	Sarin	dipashri@rediffmail.com		46285-80934
60	dipti	MN88XYd7l	Dipti	Goyal	dipti@yahoo.com		35528-55958
30	bahula	F6OOhp91	Bahula	Agarwal	bahula@gmail.com	./people/women/1.jpg	82762-58128
\.


--
-- Data for Name: Customer; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY "Customer" ("UserID", "DOB", "CumulativeUpVotes", "CumulativeDownVotes", "RegionID", "Gender") FROM stdin;
40	2013-03-07	180	78	110	Female
57	2013-02-04	269	56	317	Female
52	2013-04-08	277	287	129	Female
9	2013-01-06	181	96	136	Female
49	2013-03-02	162	393	89	Female
4	2013-02-07	202	218	399	Female
6	2013-03-07	238	324	52	Female
3	2013-07-04	9	306	57	Female
24	2013-01-08	353	393	352	Female
22	2013-07-04	17	349	365	Female
48	2013-02-05	169	114	310	Female
53	2013-09-08	312	195	127	Female
5	2013-06-07	4	52	10	Female
27	2013-08-07	303	88	24	Female
58	2013-09-03	295	11	88	Female
21	2013-09-03	30	351	298	Female
11	2013-03-05	294	409	356	Female
41	2013-02-03	173	146	42	Female
34	2013-02-09	5	320	197	Female
50	2013-01-01	464	64	1	Female
15	2013-01-03	75	302	293	Female
51	2013-03-09	386	440	243	Female
23	2013-03-01	18	161	75	Female
46	2013-09-07	216	284	18	Female
31	2013-05-05	418	443	317	Female
26	2013-08-05	96	447	168	Female
54	2013-05-01	359	482	89	Female
38	2013-08-07	415	44	90	Female
45	2013-02-01	273	302	130	Female
33	2013-03-04	2	87	186	Female
\.


--
-- Data for Name: Service; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY "Service" ("ServiceID", "Type", "SubType", "MiniDescription") FROM stdin;
0	Home	Air Duct Cleaning	\N
1	Home	Animal Removal	\N
2	Home	Appliance Refinishing	\N
3	Home	Appliance Repair	\N
4	Home	Appliance Sales	\N
5	Home	Architect	\N
6	Home	Asbestos Removal	\N
7	Home	Asphalt Driveway	\N
8	Home	Awnings	\N
9	Home	Banks	\N
10	Home	Basement Remodeling	\N
11	Home	Basement Waterproofing	\N
12	Home	Bathroom Remodeling	\N
13	Home	Bathtub Refinishing	\N
14	Home	Billiard Table Repair	\N
15	Home	Billiard Table Sales	\N
16	Home	​Biohazard Cleanup	\N
17	Home	Blind Cleaning	\N
18	Home	Buffing & Polishing	\N
19	Home	Cabinet Refacing	\N
20	Home	Cable TV Service	\N
21	Home	Camcorder Repair	\N
22	Home	Camera Repair	\N
23	Home	Carpenter	\N
24	Home	Carpet Cleaners	\N
25	Home	Carpet Installation	\N
26	Home	Ceiling Fans	\N
27	Home	Cell Phone Service	\N
28	Home	Ceramic Tile	\N
29	Home	Childproofing	\N
30	Home	Chimney Caps	\N
31	Home	Chimney Repair	\N
32	Home	Chimney Sweep	\N
33	Home	China Repair	\N
34	Home	Clock Repair	\N
35	Home	Closet Systems	\N
36	Home	Computer Repair	\N
37	Home	Computer Sales	\N
38	Home	Computer Training	\N
39	Home	Concrete Driveway	\N
40	Home	Concrete Repair	\N
41	Home	Contractors	\N
42	Home	Cooking Classes	\N
43	Home	Countertops	\N
44	Home	Custom Cabinets	\N
45	Home	Custom Furniture	\N
46	Home	Doors	\N
47	Home	Drain Cleaning	\N
48	Home	Drain Pipe	\N
49	Home	Drapery Cleaning	\N
50	Home	Driveway Gates	\N
51	Home	Dryer Vent Cleaning	\N
52	Home	Drywall	\N
53	Home	Earthquake Retrofitting	\N
54	Home	Egress Windows	\N
55	Home	Electrician	\N
56	Home	Electronic Repair	\N
57	Home	Energy Audit	\N
58	Home	Epoxy Flooring	\N
59	Home	Fireplaces	\N
60	Home	Firewood	\N
61	Home	Floor Cleaning	\N
62	Home	Flooring	\N
63	Home	Foundation Repair	\N
64	Home	Furniture Repair	\N
65	Home	Furniture Sales	\N
66	Home	Garage Builders	\N
67	Home	Garage Doors	\N
68	Home	Garbage Collection	\N
69	Home	Gas Grill Repair	\N
70	Home	Gas Leak Repair	\N
71	Home	Gas Logs	\N
72	Home	Glass Block	\N
73	Home	Glass Repair	\N
74	Home	Graphic Designers	\N
75	Home	Gutter Cleaning	\N
76	Home	Gutter Repair	\N
77	Home	Handyman Service	\N
78	Home	Hardwood Floor Repair	\N
79	Home	Hauling Services	\N
80	Home	Heating & Air Conditioning/HVAC	\N
81	Home	Holiday Decorators	\N
82	Home	Home & Garage Organization	\N
83	Home	Home Automation	\N
84	Home	Home Builders	\N
85	Home	Home Improvement Stores	\N
86	Home	Home Inspection	\N
87	Home	Home Security Systems	\N
88	Home	Home Staging	\N
89	Home	Home Theater Design	\N
90	Home	House Cleaning	\N
91	Home	House Painters	\N
92	Home	Hurricane Shutters	\N
93	Home	Insulation	\N
94	Home	Interior Designers	\N
95	Home	Interior Painters	\N
96	Home	Internet Service	\N
97	Home	Kitchen Remodeling	\N
98	Home	Lamp Repair	\N
99	Home	Landline Phone Service	\N
100	Home	Lead Paint Removal	\N
101	Home	Lighting	\N
102	Home	Locksmith	\N
103	Home	Luggage Repair	\N
104	Home	Mailbox Repair	\N
105	Home	Marble & Granite	\N
106	Home	Masonry	\N
107	Home	Mattresses	\N
108	Home	Metal Restoration	\N
109	Home	Mobile Home Remodeling	\N
110	Home	Mold Removal	\N
111	Home	Mortgage Broker	\N
112	Home	Moving Companies	\N
113	Home	Mudjacking	\N
114	Home	Muralist	\N
115	Home	Oriental Rug Cleaning	\N
116	Home	Outdoor Lighting	\N
117	Home	Pest Control	\N
118	Home	Phone Repair	\N
119	Home	Phone Sales	\N
120	Home	Phone Wiring	\N
121	Home	Piano Moving	\N
122	Home	Piano Tuning	\N
123	Home	Picture Framing	\N
124	Home	Plastering	\N
125	Home	Plumbing	\N
126	Home	Pressure Washing	\N
127	Home	Propane Sales	\N
128	Home	Property Management	\N
129	Home	Radon Testing	\N
130	Home	Remodeling	\N
131	Home	Replacement Windows	\N
132	Home	Roof Cleaning	\N
133	Home	Roof Snow Removal	\N
134	Home	Roofing	\N
135	Home	RV Sales	\N
136	Home	Satellite TV Service	\N
137	Home	Screen Repair	\N
138	Home	Security Windows	\N
139	Home	Septic Tank	\N
140	Home	Sewer Cleaning	\N
141	Home	Sewing Machine Repair	\N
142	Home	Sharpening	\N
143	Home	Siding	\N
144	Home	Signs	\N
145	Home	Skylights	\N
146	Home	Solar Panels	\N
147	Home	Stamped Concrete	\N
148	Home	Structural Engineer	\N
149	Home	Stucco	\N
150	Home	Sunrooms	\N
151	Home	Tablepads	\N
152	Home	Toy Repair	\N
153	Home	TV Antenna	\N
154	Home	TV Repair	\N
155	Home	TV Sales	\N
156	Home	Upholstery	\N
157	Home	Upholstery Cleaning	\N
158	Home	Vacuum Cleaners	\N
159	Home	VCR Repair	\N
160	Home	Voice Mail	\N
161	Home	Wallpaper	\N
162	Home	Wallpaper Removal	\N
163	Home	Water Damage Restoration	\N
164	Home	Water Delivery	\N
165	Home	Water Heaters	\N
166	Home	Water Softeners	\N
167	Home	Web Designers	\N
168	Home	Welding	\N
169	Home	Wells	\N
170	Home	Window Cleaning	\N
171	Home	Window Tinting	\N
172	Home	Window Treatments	\N
173	Home	Woodworking	\N
174	Home	Wrought Iron	\N
175	Auto	Auto Body Repair	\N
176	Auto	Auto Detailing	\N
177	Auto	Auto Glass	\N
178	Auto	Auto Painting	\N
179	Auto	Auto Repair	\N
180	Auto	Auto Upholstery	\N
181	Auto	Car Accessories	\N
182	Auto	Car Alarms	\N
183	Auto	Car Rentals	\N
184	Auto	Car Sales	\N
185	Auto	Car Stereo Installation	\N
186	Auto	Car Tires	\N
187	Auto	Car Transport	\N
188	Auto	Car Washes	\N
189	Auto	Leather & Vinyl Repair	\N
190	Auto	Muffler Repair	\N
191	Auto	Radiator Service	\N
192	Auto	Towing	\N
193	Auto	Transmission Repair	\N
194	Auto	Truck Rentals	\N
195	Auto	Van Rentals	\N
196	Auto	Motorcycle Repair	\N
197	Weddings, Parties, Entertainment	Alterations	\N
198	Weddings, Parties, Entertainment	Bridal Shops	\N
199	Weddings, Parties, Entertainment	Cake Decorating	\N
200	Weddings, Parties, Entertainment	Calligraphy	\N
201	Weddings, Parties, Entertainment	Catering	\N
202	Weddings, Parties, Entertainment	Costume Rental	\N
203	Weddings, Parties, Entertainment	Equipment Rentals	\N
204	Weddings, Parties, Entertainment	Florists	\N
205	Weddings, Parties, Entertainment	Limo Services	\N
206	Weddings, Parties, Entertainment	Nail Salons	\N
207	Weddings, Parties, Entertainment	Party Planning	\N
208	Weddings, Parties, Entertainment	Party Rentals	\N
209	Weddings, Parties, Entertainment	Personal Chef	\N
210	Weddings, Parties, Entertainment	Photographers	\N
211	Weddings, Parties, Entertainment	Reception Halls	\N
212	Weddings, Parties, Entertainment	Tuxedo Rental	\N
213	Weddings, Parties, Entertainment	Video Production	\N
214	Weddings, Parties, Entertainment	Video Transfer	\N
215	Weddings, Parties, Entertainment	Wedding Planning	\N
216	Weddings, Parties, Entertainment	Invitations	\N
217	Weddings, Parties, Entertainment	Ticket Brokers	\N
218	Pet	Dog Fence	\N
219	Pet	Dog Trainers	\N
220	Pet	Dog Walkers	\N
221	Pet	Kennels	\N
222	Pet	Pet Insurance	\N
223	Pet	Pet Sitters	\N
224	Pet	Pooper Scoopers	\N
225	Pet	Pet Grooming	\N
226	Outdoor	Basketball Goals	\N
227	Outdoor	Bicycles	\N
228	Outdoor	Boat Sales	\N
229	Outdoor	Deck Cleaning	\N
230	Outdoor	Decks	\N
231	Outdoor	Dock Building	\N
232	Outdoor	Fencing	\N
233	Outdoor	Fountains	\N
234	Outdoor	Greenhouses	\N
235	Outdoor	Irrigation Systems	\N
236	Outdoor	Lakefront Landscaping	\N
237	Outdoor	Land Surveyor	\N
238	Outdoor	Landscaping	\N
239	Outdoor	Lawn Mower Repair	\N
240	Outdoor	Lawn Service	\N
241	Outdoor	Lawn Treatment	\N
242	Outdoor	Leaf Removal	\N
243	Outdoor	Misting Systems	\N
244	Outdoor	Mulch	\N
245	Outdoor	Playground Equipment	\N
246	Outdoor	Pool Cleaners	\N
247	Outdoor	Roto Tilling	\N
248	Outdoor	Snow Removal	\N
249	Outdoor	Tree Service	\N
250	Outdoor	Marinas	\N
251	Outdoor	Hardscaping	\N
371	Medical Facilities	Adult Day Care	\N
372	Medical Facilities	Alcohol Treatment Centers	\N
373	Medical Facilities	Assisted Living	\N
374	Medical Facilities	Blood Banks	\N
375	Medical Facilities	Blood Labs	\N
376	Medical Facilities	Childrens Hospital	\N
377	Medical Facilities	Denture Labs	\N
378	Medical Facilities	Drug & Alcohol Testing	\N
379	Medical Facilities	Drug Treatment Centers	\N
380	Medical Facilities	Family Planning Center	\N
381	Medical Facilities	Hospice	\N
382	Medical Facilities	Hospitalist	\N
383	Medical Facilities	Hospitals	\N
384	Medical Facilities	Independent Living	\N
385	Medical Facilities	Nursing Homes	\N
386	Medical Facilities	Radiology	\N
387	Medical Facilities	Retail Health Clinics	\N
388	Medical Facilities	Therapy/Respite Camps	\N
389	Medical Facilities	Urgent Care Center	\N
390	Medical Facilities	Vein Treatment	\N
391	Medical Facilities	Diagnostic Labs	\N
392	Other	Furs	\N
393	Other	Accountant	\N
394	Other	Antiques	\N
395	Other	Auction Services	\N
396	Other	Baby Equipment Rental	\N
397	Other	Buying Services	\N
398	Other	Child Care	\N
399	Other	Copies	\N
400	Other	Dance Classes	\N
401	Other	Day Care	\N
402	Other	Delivery Service	\N
403	Other	Drivers Ed	\N
404	Other	Dry Cleaning	\N
405	Other	Dumpster Service	\N
406	Other	Errand Service	\N
407	Other	Film Developing	\N
408	Other	Financial Advisor	\N
409	Other	Funeral Homes	\N
410	Other	Genealogy	\N
411	Other	Gift Shops	\N
412	Other	Hair Removal 	\N
413	Other	Hair Salon	\N
414	Other	Home Child Care	\N
415	Other	Home Warranty Companies	\N
416	Other	Insurance Companies	\N
417	Other	Ironing	\N
418	Other	Jewelry Appraisal	\N
419	Other	Jewelry Stores	\N
420	Other	Mailing Service	\N
421	Other	Music Lessons	\N
422	Other	Musical Instrument Repair	\N
423	Other	Office Equipment Repair	\N
424	Other	Paper Shredding	\N
425	Other	Private Investigators	\N
426	Other	Real Estate Appraisal	\N
427	Other	Resume Services	\N
428	Other	Secretarial Services	\N
429	Other	Shoe Repair	\N
430	Other	Storage Units	\N
431	Other	Tanning Salons	\N
432	Other	Tattoos	\N
433	Other	Taxi Service	\N
434	Other	Title Companies	\N
435	Other	Travel Agency	\N
436	Other	Trophy Shops	\N
437	Other	Tutoring	\N
438	Other	Warranty Companies	\N
439	Other	Watch Repair	\N
440	Other	Furs	\N
441	Other	Real Estate Agents	\N
\.


--
-- Data for Name: ServiceProvider; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY "ServiceProvider" ("UserID", "Webpage") FROM stdin;
47	www.bfcaed.com
25	www.feacdb.com
34	www.bafdec.com
32	www.dcbaef.com
43	www.cfdbae.com
49	www.ebfcda.com
57	www.bfeacd.com
19	www.ebafdc.com
5	www.efcdba.com
36	www.dbcafe.com
16	www.cfaebd.com
53	www.ecfdba.com
39	www.abfedc.com
46	www.ebfacd.com
24	www.aefcbd.com
9	www.febdca.com
33	www.becfda.com
4	www.bfdcae.com
14	www.bfdeca.com
51	www.adfceb.com
15	www.ecbfda.com
30	www.feacbd.com
27	www.bcdefa.com
38	www.efdbac.com
54	www.aedcbf.com
52	www.fcabde.com
\.


--
-- Data for Name: Appointment; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY "Appointment" ("CustomerUserID", "ServiceID", "ServiceProviderUserID", "RegionID", "Price", "Status", "StartDate", "EndDate", "Days", "StartTime", "EndTime") FROM stdin;
21	116	14	11	429	Pending	2013-01-04	2013-04-04	1011100	19:00:00	23:00:00
51	8	33	24	508	Pending	2013-01-07	2013-05-08	1011010	04:30:00	21:00:00
52	121	57	40	561	Confirmed	2013-01-01	2013-09-01	1001110	09:30:00	12:30:00
51	239	19	33	965	Pending	2013-07-06	2013-07-09	1010110	08:00:00	14:30:00
3	38	5	19	462	Pending	2013-03-08	2013-07-02	1111000	00:00:00	16:00:00
27	22	14	48	385	Pending	2013-01-01	2013-07-02	0101011	08:30:00	11:30:00
52	202	36	2	633	Confirmed	2013-01-02	2013-04-01	0011011	06:30:00	16:00:00
54	0	33	17	825	Pending	2013-03-05	2013-04-01	1101100	04:00:00	12:30:00
46	53	4	38	669	Confirmed	2013-02-05	2013-05-06	0110011	09:30:00	11:30:00
51	212	15	41	516	Pending	2013-08-02	2013-08-07	0011110	15:00:00	21:00:00
15	98	15	4	793	Pending	2013-01-09	2013-04-06	1011001	03:30:00	13:00:00
23	148	34	19	878	Cancelled	2013-04-08	2013-07-05	1110010	08:00:00	23:30:00
9	2	9	35	725	Pending	2013-02-05	2013-08-01	0110101	15:30:00	22:00:00
\.


--
-- Name: Appointment_CustomerUserID_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('"Appointment_CustomerUserID_seq"', 1, false);


--
-- Name: Appointment_RegionID_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('"Appointment_RegionID_seq"', 1, false);


--
-- Name: Appointment_ServiceID_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('"Appointment_ServiceID_seq"', 1, false);


--
-- Name: Appointment_ServiceProviderUserID_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('"Appointment_ServiceProviderUserID_seq"', 1, false);


--
-- Data for Name: Wish; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY "Wish" ("WishID", "CustomerUserID", "Description", "MaximumPrice", "StartDate", "EndDate", "Days", "StartTime", "EndTime", "ServiceID", "RegionID", "Timestamp") FROM stdin;
1	51	\N	538	2013-06-06	2013-06-06	1011100	00:30:00	19:30:00	156	26	2013-05-01 00:00:00
3	49	\N	890	2013-09-07	2013-04-08	1110010	11:00:00	03:30:00	36	44	2013-03-03 03:00:00
6	21	\N	836	2013-02-02	2013-01-04	0101110	18:00:00	09:30:00	62	45	2013-08-01 22:00:00
10	51	\N	829	2013-04-08	2013-09-07	1011001	09:00:00	06:00:00	77	43	2013-01-08 07:00:00
11	54	\N	608	2013-07-02	2013-02-01	0100111	22:30:00	17:30:00	72	23	2013-02-06 04:00:00
13	46	\N	775	2013-02-04	2013-04-07	1101100	16:00:00	01:30:00	203	34	2013-06-09 06:00:00
16	46	\N	988	2013-04-07	2013-08-07	0101110	07:30:00	11:30:00	26	21	2013-02-05 19:00:00
19	50	\N	234	2013-02-07	2013-01-08	0011011	17:30:00	09:00:00	230	32	2013-06-05 01:00:00
22	46	\N	910	2013-03-02	2013-08-07	1001011	02:30:00	17:00:00	36	27	2013-06-09 22:00:00
25	4	\N	791	2013-05-03	2013-02-05	1010011	06:00:00	12:00:00	73	3	2013-01-07 15:00:00
31	45	\N	235	2013-06-06	2013-09-03	1000111	17:00:00	01:30:00	134	2	2013-05-08 11:00:00
33	34	\N	464	2013-06-07	2013-01-04	1100011	12:00:00	02:30:00	126	35	2013-05-09 08:00:00
35	15	\N	821	2013-02-07	2013-04-01	1101010	11:00:00	07:30:00	72	32	2013-06-09 08:00:00
37	58	\N	562	2013-03-09	2013-09-09	1110001	06:00:00	23:00:00	90	30	2013-02-04 04:00:00
38	45	\N	841	2013-02-03	2013-09-04	0101101	00:30:00	19:30:00	42	42	2013-07-07 22:00:00
41	58	\N	596	2013-05-09	2013-04-02	0110110	04:30:00	11:00:00	120	0	2013-04-01 17:00:00
43	45	\N	973	2013-01-02	2013-04-09	1110010	04:00:00	01:30:00	24	33	2013-01-06 12:00:00
44	26	\N	321	2013-06-04	2013-01-02	1001101	13:00:00	04:30:00	61	0	2013-06-01 05:00:00
51	54	\N	518	2013-02-04	2013-06-09	1101100	03:30:00	21:00:00	386	9	2013-06-07 20:00:00
62	33	\N	501	2013-08-03	2013-01-05	1001101	02:30:00	22:00:00	163	0	2013-06-06 11:00:00
67	24	\N	810	2013-07-01	2013-04-06	1110010	23:00:00	15:00:00	158	0	2013-03-02 03:00:00
74	51	\N	611	2013-05-07	2013-07-01	1011010	19:00:00	16:00:00	75	18	2013-06-04 05:00:00
75	24	\N	233	2013-07-05	2013-03-09	1100110	20:30:00	00:30:00	47	0	2013-08-02 22:00:00
76	22	\N	364	2013-04-06	2013-06-04	0011011	08:00:00	01:00:00	54	50	2013-08-01 17:00:00
78	22	\N	788	2013-04-08	2013-01-08	0110101	23:30:00	15:00:00	61	38	2013-03-09 17:00:00
83	53	\N	223	2013-08-07	2013-07-05	0001111	10:00:00	05:30:00	381	19	2013-06-06 04:00:00
88	31	\N	454	2013-06-08	2013-04-05	1010011	12:30:00	05:00:00	396	0	2013-09-08 00:00:00
92	31	\N	381	2013-03-03	2013-07-04	0011011	05:00:00	05:00:00	128	37	2013-06-01 14:00:00
94	22	\N	696	2013-05-05	2013-08-09	0110110	18:00:00	10:00:00	54	12	2013-03-04 18:00:00
98	6	\N	580	2013-04-02	2013-05-09	0101011	02:30:00	11:30:00	243	47	2013-05-06 15:00:00
99	11	\N	847	2013-09-01	2013-04-06	0011101	14:00:00	17:30:00	62	35	2013-05-06 14:00:00
101	46	\N	496	2013-07-04	2013-09-06	1110001	21:30:00	19:30:00	210	32	2013-05-05 12:00:00
108	4	\N	559	2013-03-02	2013-02-06	1001101	15:00:00	11:00:00	177	44	2013-05-07 03:00:00
109	26	\N	762	2013-04-05	2013-05-06	1101100	16:00:00	06:00:00	103	24	2013-09-04 17:00:00
112	57	\N	573	2013-07-08	2013-05-09	0110101	09:00:00	12:30:00	227	27	2013-08-07 21:00:00
116	21	\N	848	2013-04-08	2013-06-07	0001111	21:00:00	20:00:00	67	1	2013-02-07 09:00:00
120	48	\N	690	2013-07-03	2013-07-05	1010110	07:00:00	22:00:00	382	32	2013-02-06 22:00:00
121	53	\N	206	2013-06-07	2013-02-06	1001110	13:30:00	18:00:00	195	2	2013-05-01 17:00:00
122	45	\N	248	2013-05-03	2013-05-03	0110011	23:00:00	06:30:00	78	18	2013-03-08 15:00:00
126	38	\N	780	2013-03-03	2013-04-02	1010110	20:30:00	00:30:00	216	34	2013-07-07 13:00:00
133	9	\N	392	2013-01-06	2013-05-05	0111001	15:30:00	23:00:00	378	26	2013-07-07 22:00:00
139	11	\N	724	2013-01-08	2013-05-03	0110011	23:00:00	02:00:00	224	16	2013-05-02 12:00:00
140	4	\N	745	2013-08-02	2013-08-04	1001101	07:00:00	17:30:00	148	6	2013-08-04 07:00:00
143	31	\N	346	2013-09-06	2013-03-02	0011110	14:30:00	17:00:00	145	19	2013-09-09 18:00:00
146	54	\N	203	2013-06-05	2013-02-01	0011011	10:30:00	12:30:00	112	33	2013-06-01 17:00:00
150	11	\N	560	2013-04-03	2013-09-06	1001110	21:00:00	12:00:00	208	1	2013-06-05 09:00:00
151	6	\N	312	2013-02-01	2013-03-06	0110101	11:00:00	03:00:00	15	42	2013-06-03 09:00:00
153	3	\N	626	2013-04-06	2013-06-06	1011100	19:00:00	09:00:00	116	25	2013-05-03 22:00:00
156	26	\N	307	2013-06-07	2013-05-02	1100101	06:30:00	05:00:00	137	12	2013-07-04 02:00:00
157	23	\N	295	2013-05-08	2013-02-06	0011011	13:00:00	15:30:00	169	10	2013-09-04 01:00:00
158	22	\N	725	2013-09-05	2013-07-01	1011001	07:00:00	16:30:00	81	12	2013-09-03 19:00:00
161	6	\N	988	2013-05-08	2013-09-09	1110001	11:30:00	12:30:00	145	48	2013-07-07 05:00:00
163	46	\N	417	2013-06-08	2013-09-02	1011010	02:00:00	20:30:00	371	15	2013-08-04 17:00:00
166	50	\N	835	2013-09-08	2013-08-06	1110001	09:30:00	19:30:00	87	49	2013-04-02 13:00:00
173	45	\N	587	2013-05-07	2013-08-08	0011011	00:30:00	20:00:00	146	43	2013-05-09 12:00:00
174	46	\N	646	2013-07-04	2013-04-03	0111010	17:30:00	06:30:00	218	24	2013-09-02 06:00:00
179	58	\N	766	2013-05-05	2013-08-03	1010101	11:00:00	14:00:00	246	38	2013-05-07 00:00:00
181	33	\N	229	2013-07-05	2013-03-05	0010111	12:30:00	06:30:00	87	44	2013-02-05 10:00:00
182	33	\N	454	2013-07-08	2013-03-02	1010110	19:00:00	00:00:00	10	50	2013-07-01 08:00:00
183	11	\N	780	2013-02-09	2013-05-06	1001011	11:00:00	18:30:00	172	33	2013-07-02 22:00:00
184	22	\N	352	2013-04-03	2013-06-04	1010110	15:00:00	18:00:00	105	12	2013-06-04 05:00:00
186	11	\N	855	2013-08-07	2013-01-07	1001110	03:30:00	08:30:00	227	50	2013-03-07 18:00:00
189	49	\N	491	2013-06-09	2013-06-04	1101010	19:00:00	08:00:00	388	12	2013-01-06 03:00:00
191	24	\N	400	2013-05-09	2013-07-09	1110100	14:30:00	06:00:00	93	28	2013-06-06 09:00:00
195	51	\N	457	2013-08-01	2013-09-01	1111000	19:00:00	02:00:00	167	23	2013-02-08 03:00:00
196	5	\N	471	2013-06-09	2013-02-07	1101100	09:30:00	20:00:00	400	2	2013-03-02 07:00:00
199	58	\N	670	2013-07-05	2013-09-04	0100111	02:30:00	06:30:00	94	25	2013-07-06 00:00:00
200	50	\N	571	2013-03-09	2013-05-03	1101001	15:00:00	19:00:00	104	36	2013-09-07 09:00:00
202	54	\N	649	2013-06-08	2013-06-04	1101001	17:00:00	23:30:00	167	2	2013-07-02 23:00:00
204	6	\N	878	2013-05-03	2013-04-06	0111010	22:30:00	06:00:00	143	17	2013-04-02 18:00:00
206	27	\N	524	2013-08-04	2013-05-01	1011010	11:00:00	03:00:00	78	8	2013-05-09 16:00:00
210	50	\N	985	2013-04-03	2013-03-03	1111000	14:30:00	21:30:00	231	41	2013-02-05 05:00:00
213	9	\N	822	2013-03-01	2013-06-02	0110101	09:30:00	16:00:00	151	38	2013-08-07 23:00:00
215	3	\N	580	2013-07-04	2013-05-05	1101010	14:00:00	01:30:00	381	37	2013-02-04 22:00:00
219	48	\N	370	2013-03-04	2013-02-05	1101001	14:30:00	20:30:00	170	33	2013-07-08 01:00:00
227	5	\N	293	2013-03-01	2013-09-08	1100011	03:30:00	19:00:00	36	17	2013-05-06 06:00:00
231	31	\N	673	2013-03-08	2013-09-09	0111010	06:30:00	21:30:00	42	12	2013-09-09 11:00:00
232	54	\N	950	2013-04-06	2013-02-08	0011101	20:00:00	22:30:00	180	4	2013-08-04 17:00:00
233	45	\N	233	2013-01-09	2013-06-07	1100101	15:30:00	18:30:00	187	1	2013-06-08 05:00:00
234	40	\N	616	2013-03-09	2013-03-05	1110001	23:00:00	21:30:00	70	48	2013-08-09 02:00:00
235	9	\N	845	2013-06-08	2013-04-07	1001101	03:00:00	03:30:00	374	1	2013-08-04 21:00:00
237	5	\N	387	2013-04-06	2013-08-09	1000111	19:00:00	08:00:00	87	22	2013-09-05 05:00:00
241	26	\N	204	2013-04-02	2013-02-05	0011101	02:30:00	02:30:00	57	1	2013-07-06 07:00:00
244	11	\N	790	2013-07-08	2013-07-08	1010011	16:30:00	04:00:00	101	17	2013-09-01 00:00:00
245	3	\N	943	2013-01-09	2013-06-01	1110010	22:30:00	18:30:00	15	15	2013-03-04 17:00:00
248	15	\N	971	2013-03-07	2013-07-04	1010110	05:30:00	21:30:00	399	7	2013-07-03 14:00:00
249	52	\N	382	2013-01-05	2013-05-07	1010110	11:30:00	15:30:00	27	38	2013-04-06 17:00:00
250	38	\N	921	2013-02-03	2013-06-09	0111001	19:00:00	12:00:00	165	19	2013-05-05 12:00:00
251	53	\N	492	2013-07-01	2013-02-02	1000111	02:00:00	08:00:00	54	17	2013-03-04 15:00:00
258	5	\N	310	2013-04-04	2013-02-03	0110101	11:00:00	12:30:00	226	48	2013-08-01 01:00:00
261	45	\N	319	2013-04-08	2013-07-02	1001101	18:30:00	06:00:00	170	43	2013-08-01 19:00:00
262	27	\N	437	2013-07-09	2013-07-05	1011010	16:00:00	05:30:00	132	37	2013-05-01 03:00:00
264	49	\N	620	2013-08-04	2013-04-02	1100101	21:30:00	14:00:00	147	6	2013-07-07 12:00:00
265	23	\N	403	2013-09-08	2013-06-05	0101101	19:30:00	03:30:00	93	41	2013-06-05 06:00:00
266	52	\N	841	2013-09-03	2013-03-03	0100111	22:00:00	13:00:00	196	32	2013-03-09 09:00:00
271	31	\N	302	2013-07-05	2013-09-01	0101110	00:30:00	01:30:00	67	11	2013-05-08 03:00:00
272	45	\N	899	2013-05-05	2013-06-07	1110010	20:00:00	06:30:00	25	22	2013-01-04 22:00:00
275	49	\N	246	2013-04-07	2013-09-05	1100101	18:00:00	18:00:00	100	28	2013-06-09 04:00:00
281	53	\N	376	2013-01-05	2013-09-04	1100110	08:30:00	12:30:00	54	11	2013-07-04 08:00:00
284	34	\N	601	2013-09-08	2013-08-07	1010101	05:30:00	21:00:00	143	17	2013-03-08 16:00:00
286	46	\N	201	2013-05-04	2013-04-01	0110110	00:30:00	23:30:00	238	23	2013-04-07 13:00:00
288	45	\N	824	2013-04-05	2013-03-04	1101100	10:00:00	08:30:00	175	29	2013-03-04 14:00:00
289	9	\N	604	2013-03-07	2013-09-09	1010110	19:00:00	19:00:00	383	19	2013-09-05 08:00:00
293	50	\N	517	2013-03-05	2013-07-09	1001011	22:00:00	18:00:00	137	34	2013-03-04 16:00:00
295	9	\N	284	2013-08-07	2013-05-07	0101110	08:00:00	04:30:00	186	0	2013-01-09 14:00:00
296	5	\N	606	2013-03-06	2013-09-09	0111001	21:30:00	17:30:00	19	18	2013-03-08 22:00:00
298	49	\N	784	2013-01-08	2013-04-06	0001111	02:00:00	22:00:00	170	7	2013-06-09 17:00:00
304	26	\N	852	2013-06-06	2013-05-06	0111100	08:00:00	16:30:00	163	13	2013-06-02 12:00:00
308	34	\N	737	2013-01-05	2013-05-05	1000111	05:00:00	12:30:00	0	49	2013-07-08 18:00:00
311	27	\N	469	2013-01-02	2013-07-07	0110101	22:00:00	08:30:00	374	14	2013-03-09 15:00:00
312	54	\N	975	2013-09-01	2013-02-06	0011101	07:30:00	04:00:00	47	29	2013-04-01 05:00:00
313	24	\N	480	2013-05-02	2013-08-06	0001111	13:30:00	16:00:00	38	40	2013-02-04 07:00:00
321	34	\N	640	2013-04-09	2013-06-08	0111100	16:00:00	12:00:00	165	14	2013-09-05 21:00:00
322	54	\N	365	2013-09-06	2013-05-08	1010101	09:00:00	13:00:00	145	19	2013-06-05 08:00:00
327	6	\N	883	2013-03-09	2013-04-09	1110001	15:00:00	03:00:00	193	16	2013-09-05 19:00:00
336	3	\N	335	2013-03-01	2013-01-06	0010111	16:30:00	13:30:00	105	50	2013-07-09 13:00:00
337	31	\N	960	2013-05-04	2013-05-01	1110010	16:30:00	08:00:00	24	4	2013-03-07 05:00:00
343	49	\N	309	2013-09-07	2013-09-09	1001101	06:30:00	23:30:00	163	0	2013-06-03 03:00:00
345	4	\N	466	2013-07-07	2013-02-06	0101101	23:30:00	19:00:00	95	39	2013-07-04 03:00:00
348	34	\N	847	2013-08-04	2013-06-01	0110011	00:00:00	09:30:00	71	43	2013-03-04 02:00:00
350	3	\N	278	2013-07-04	2013-06-06	1001110	12:30:00	13:00:00	84	0	2013-02-01 10:00:00
354	11	\N	828	2013-06-03	2013-07-09	1101001	10:00:00	03:30:00	43	6	2013-03-03 12:00:00
356	26	\N	921	2013-02-02	2013-07-01	0111010	14:00:00	19:30:00	69	0	2013-02-04 16:00:00
358	48	\N	537	2013-07-02	2013-04-05	0100111	18:00:00	10:00:00	141	17	2013-09-07 00:00:00
359	21	\N	745	2013-08-09	2013-01-08	1100110	00:00:00	10:30:00	371	24	2013-02-08 05:00:00
361	52	\N	929	2013-03-08	2013-05-08	0101110	19:00:00	14:00:00	41	19	2013-01-03 15:00:00
365	34	\N	861	2013-07-06	2013-02-05	1000111	17:30:00	02:00:00	193	38	2013-07-05 20:00:00
366	15	\N	702	2013-03-07	2013-09-02	0001111	14:30:00	17:00:00	157	33	2013-05-05 16:00:00
367	41	\N	525	2013-09-01	2013-05-06	0110101	05:00:00	10:00:00	98	46	2013-03-08 05:00:00
368	40	\N	431	2013-02-03	2013-04-04	1101001	18:00:00	23:00:00	106	29	2013-09-01 19:00:00
371	21	\N	907	2013-02-09	2013-07-09	1001011	13:30:00	18:30:00	20	37	2013-03-08 23:00:00
374	58	\N	274	2013-07-02	2013-02-04	0110110	19:30:00	01:00:00	216	50	2013-03-05 01:00:00
377	11	\N	783	2013-02-07	2013-06-09	1010110	12:00:00	17:30:00	246	43	2013-03-02 10:00:00
381	46	\N	988	2013-03-06	2013-08-02	0101110	16:30:00	05:00:00	103	43	2013-09-06 20:00:00
383	31	\N	369	2013-07-03	2013-03-06	1110100	04:30:00	03:00:00	43	4	2013-01-09 19:00:00
384	38	\N	684	2013-08-06	2013-07-06	0011011	14:00:00	15:00:00	372	10	2013-06-06 22:00:00
387	50	\N	793	2013-07-02	2013-03-07	0110110	23:30:00	17:00:00	184	39	2013-08-02 19:00:00
400	4	\N	753	2013-04-01	2013-01-07	0111100	19:00:00	22:00:00	186	27	2013-05-02 20:00:00
401	21	\N	661	2013-01-05	2013-01-08	0111100	21:30:00	18:30:00	233	47	2013-07-01 22:00:00
408	58	\N	858	2013-03-04	2013-04-06	1001101	16:00:00	07:30:00	46	9	2013-05-07 10:00:00
409	22	\N	712	2013-04-02	2013-08-08	0011011	01:00:00	00:30:00	87	31	2013-04-04 16:00:00
411	6	\N	339	2013-03-09	2013-08-01	1101100	10:00:00	06:00:00	93	47	2013-05-03 06:00:00
414	27	\N	557	2013-07-05	2013-05-04	0111010	12:00:00	16:00:00	115	6	2013-08-06 19:00:00
421	51	\N	741	2013-06-04	2013-01-09	1010011	19:30:00	05:00:00	247	32	2013-02-05 11:00:00
422	45	\N	721	2013-01-07	2013-04-05	1011010	02:00:00	01:00:00	66	21	2013-03-01 09:00:00
423	3	\N	890	2013-02-01	2013-08-06	0111010	10:00:00	10:30:00	112	40	2013-09-07 14:00:00
424	23	\N	586	2013-01-04	2013-05-06	1100101	19:00:00	10:00:00	4	18	2013-04-03 22:00:00
427	6	\N	774	2013-07-01	2013-09-03	1000111	08:00:00	23:00:00	168	49	2013-06-04 13:00:00
429	3	\N	527	2013-05-08	2013-06-08	0111010	18:30:00	09:00:00	147	46	2013-01-04 04:00:00
431	15	\N	237	2013-03-08	2013-03-05	1011100	07:30:00	05:00:00	155	22	2013-03-03 08:00:00
432	38	\N	937	2013-07-09	2013-01-02	1011010	19:30:00	17:00:00	147	4	2013-08-08 21:00:00
433	22	\N	761	2013-05-02	2013-07-04	1110010	03:30:00	01:00:00	8	45	2013-08-09 15:00:00
441	54	\N	310	2013-08-08	2013-03-03	1111000	01:00:00	16:00:00	383	45	2013-07-04 09:00:00
456	51	\N	464	2013-08-08	2013-09-03	0010111	07:30:00	15:00:00	131	7	2013-05-02 01:00:00
457	31	\N	319	2013-08-08	2013-03-09	1001101	12:30:00	01:30:00	396	19	2013-07-03 19:00:00
459	21	\N	902	2013-08-06	2013-06-08	0011011	12:30:00	15:30:00	118	28	2013-07-04 16:00:00
461	48	\N	477	2013-03-05	2013-01-08	0111001	11:00:00	13:30:00	217	45	2013-07-02 15:00:00
462	33	\N	805	2013-02-08	2013-07-08	0010111	11:00:00	00:00:00	3	24	2013-05-08 04:00:00
463	24	\N	930	2013-03-01	2013-08-04	1011001	16:30:00	12:30:00	58	23	2013-05-04 16:00:00
464	45	\N	388	2013-05-02	2013-05-03	0100111	00:00:00	10:00:00	87	6	2013-04-02 14:00:00
465	31	\N	389	2013-02-07	2013-07-08	1100110	22:00:00	07:00:00	82	11	2013-01-05 23:00:00
470	6	\N	243	2013-03-01	2013-05-03	1011100	16:00:00	18:00:00	115	0	2013-09-01 22:00:00
471	34	\N	878	2013-03-02	2013-01-03	1111000	17:00:00	23:00:00	384	6	2013-06-04 14:00:00
472	27	\N	313	2013-01-03	2013-02-06	1011010	03:30:00	02:00:00	245	23	2013-02-01 04:00:00
476	15	\N	624	2013-06-04	2013-05-04	1010011	06:00:00	00:00:00	71	27	2013-08-01 13:00:00
478	50	\N	286	2013-08-07	2013-02-04	1010110	23:30:00	14:00:00	203	36	2013-03-09 11:00:00
487	58	\N	229	2013-01-07	2013-02-08	1100110	12:00:00	20:00:00	216	41	2013-01-05 11:00:00
489	46	\N	444	2013-07-03	2013-07-05	0110011	22:00:00	21:00:00	162	21	2013-07-08 12:00:00
494	46	\N	794	2013-06-02	2013-08-05	0111100	15:00:00	08:30:00	26	46	2013-08-02 22:00:00
496	15	\N	924	2013-07-05	2013-08-01	0011101	09:00:00	17:30:00	194	6	2013-07-01 05:00:00
497	22	\N	645	2013-05-01	2013-02-07	1110001	20:30:00	16:30:00	197	21	2013-06-06 19:00:00
498	34	\N	983	2013-08-04	2013-06-06	1111000	22:30:00	17:30:00	185	31	2013-08-07 11:00:00
\.


--
-- Data for Name: Bids; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY "Bids" ("ServiceProviderUserID", "WishID", "CustomerUserID", "BidValue", "Details") FROM stdin;
46	121	53	264	\N
36	343	49	263	\N
38	271	31	247	\N
\.


--
-- Name: Bids_CustomerUserID_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('"Bids_CustomerUserID_seq"', 1, false);


--
-- Name: Bids_ServiceProviderUserID_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('"Bids_ServiceProviderUserID_seq"', 1, false);


--
-- Name: Bids_WishID_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('"Bids_WishID_seq"', 1, false);


--
-- Name: Customer_UserID_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('"Customer_UserID_seq"', 1, false);


--
-- Data for Name: Follows; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY "Follows" ("FollowerCustomerUserID", "FollowedCustomerUserID") FROM stdin;
52	57
24	46
9	22
23	31
57	33
31	5
4	45
45	57
54	27
50	48
53	15
57	46
6	15
31	38
58	46
53	3
21	40
50	3
50	22
57	34
3	57
3	53
54	45
48	23
40	49
53	52
53	50
15	53
5	4
11	41
4	4
24	48
23	54
22	54
48	58
46	3
46	26
40	15
15	40
33	53
38	24
51	48
53	22
4	48
15	45
46	5
3	4
52	52
40	48
22	51
57	41
11	9
21	15
5	40
52	15
15	27
50	27
50	33
34	57
26	52
52	4
41	52
51	24
9	3
46	48
33	31
40	11
52	38
57	22
22	21
51	58
11	51
57	40
51	31
24	9
50	21
15	26
54	46
26	38
48	50
9	57
27	31
58	52
45	53
5	21
9	49
6	54
48	51
6	22
27	5
53	26
31	4
31	34
22	53
34	27
57	6
48	11
57	15
5	3
33	9
58	53
40	3
5	11
51	51
15	41
4	50
23	3
6	38
15	5
6	48
58	11
45	5
9	4
46	50
11	23
49	58
48	15
23	48
4	33
52	48
33	21
54	3
27	38
21	3
4	6
9	48
52	23
48	5
21	4
11	52
49	23
15	21
3	5
38	40
52	54
15	58
58	9
4	23
23	52
33	38
46	52
40	23
6	51
5	53
23	27
33	46
34	24
50	50
53	6
27	52
54	6
52	51
26	27
3	3
11	50
11	33
54	41
58	58
41	51
50	46
54	31
53	34
11	31
51	57
24	11
31	27
27	24
40	58
54	58
49	11
24	3
33	27
52	45
50	38
45	27
58	54
3	38
24	38
57	21
50	31
31	3
34	22
48	31
34	26
24	34
33	51
11	54
38	41
52	24
46	58
4	27
41	11
34	53
22	24
50	5
15	23
41	48
45	4
9	38
54	11
33	26
41	22
52	21
49	26
21	34
54	49
58	33
21	24
34	38
23	9
11	21
38	15
22	48
57	53
9	40
33	3
33	54
33	33
21	58
51	3
40	38
3	54
53	23
33	45
40	6
54	48
40	5
45	26
54	15
51	5
21	38
48	26
3	58
46	41
41	15
53	27
45	34
34	6
24	52
46	38
53	40
5	24
5	50
31	51
57	51
3	11
57	48
33	6
49	53
51	52
57	4
27	41
40	50
26	49
15	6
49	40
26	23
40	45
51	26
51	27
57	9
15	57
46	33
9	11
38	9
27	3
51	15
3	48
3	41
52	26
33	40
22	26
31	31
24	5
27	27
3	31
34	54
53	58
41	46
3	26
51	41
57	26
24	21
9	33
31	6
57	58
6	53
27	54
41	58
40	34
38	58
23	6
27	34
15	54
50	4
49	24
58	48
9	21
34	34
41	4
53	49
31	41
46	46
11	45
34	4
6	46
54	4
51	34
33	23
53	54
48	48
21	27
3	24
48	21
27	9
52	40
40	27
34	3
15	24
34	45
45	49
34	11
3	22
38	51
46	22
41	57
26	6
34	50
49	5
27	45
58	45
52	46
3	23
27	46
21	5
45	22
40	24
27	26
38	6
6	6
6	58
15	3
24	57
21	33
4	57
6	3
52	27
41	38
9	51
52	49
24	41
34	31
4	34
49	51
53	24
27	51
45	48
52	6
45	45
58	22
21	45
3	21
54	21
46	53
49	4
27	33
26	4
33	34
23	11
5	41
6	52
46	4
50	23
23	5
58	15
23	34
15	38
53	53
3	33
23	4
34	46
48	49
53	51
31	49
49	3
46	31
5	5
34	52
49	46
45	21
50	24
22	6
11	3
26	48
5	31
31	24
38	4
3	49
52	41
24	31
48	6
50	41
4	24
45	3
22	11
21	53
49	6
38	3
57	45
9	50
23	45
40	21
41	26
21	9
27	48
40	54
57	49
45	58
53	4
48	9
24	54
9	24
5	33
38	34
22	50
45	15
57	5
41	40
40	41
24	24
6	50
49	22
23	38
6	49
49	15
15	48
52	50
26	21
38	50
21	23
24	23
54	22
57	38
51	40
45	41
4	5
41	23
6	9
41	41
21	21
58	23
6	34
48	27
4	31
50	11
5	34
24	22
22	33
24	33
58	49
40	52
24	51
51	6
6	40
46	21
23	46
11	58
9	58
50	58
51	22
22	45
49	54
57	54
54	40
50	45
22	31
9	6
3	45
46	51
53	5
26	11
9	53
4	49
38	26
21	57
50	15
34	40
5	26
41	49
38	31
31	45
57	31
31	9
4	51
9	54
27	21
26	33
52	31
22	38
15	31
58	6
50	34
45	50
26	31
51	4
48	24
45	33
49	27
23	53
22	5
21	51
4	40
40	31
40	57
46	9
54	53
53	21
38	5
57	23
51	46
54	54
41	54
6	31
31	40
27	53
11	22
41	45
27	58
45	54
45	23
34	48
54	24
41	27
53	41
46	27
24	27
26	26
46	6
15	11
26	22
31	46
15	34
27	11
27	49
31	53
40	4
52	9
4	9
5	52
53	31
11	46
38	45
24	53
49	52
5	6
58	21
51	45
41	5
46	54
22	9
40	51
57	57
51	9
38	23
33	52
31	50
21	48
6	27
3	50
22	15
51	23
53	33
11	26
50	26
3	51
21	6
21	46
41	3
48	38
5	22
4	52
57	3
4	26
5	58
23	41
5	48
26	45
9	34
33	58
58	57
31	33
6	24
21	11
31	23
27	23
21	49
22	23
58	3
53	11
48	57
5	45
26	53
3	9
48	40
52	34
58	40
22	40
50	52
52	5
41	34
15	49
26	41
54	52
40	53
23	22
9	41
41	50
11	4
54	5
26	15
58	51
38	11
23	26
40	22
53	38
31	52
48	46
41	31
27	6
50	40
46	40
38	27
41	6
22	49
11	27
48	34
4	3
22	27
34	15
26	50
51	53
24	40
21	31
40	33
31	54
33	57
22	22
34	51
31	26
58	38
15	4
57	50
34	23
23	40
46	57
41	21
11	40
22	41
52	22
26	3
6	11
58	4
15	9
50	9
6	45
15	51
58	41
9	26
21	41
33	15
26	51
26	40
45	11
9	52
21	22
40	40
27	22
22	34
33	24
48	3
\.


--
-- Name: Follows_FollowedCustomerUserID_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('"Follows_FollowedCustomerUserID_seq"', 1, false);


--
-- Name: Follows_FollowerCustomerUserID_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('"Follows_FollowerCustomerUserID_seq"', 1, false);


--
-- Name: Location_RegionID_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('"Location_RegionID_seq"', 1, false);


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
-- Data for Name: Provides; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY "Provides" ("ServiceProviderUserID", "ServiceID", "RegionID", "Days", "StartTime", "EndTime", "Name", "Price", "Discount", "Description") FROM stdin;
54	9	9	0101011	21:00:00	23:00:00	Canara Bank	874	0	\N
15	411	26	0011110	17:00:00	20:00:00	HallMark Gift Shop	952	0	\N
30	387	15	0011011	12:30:00	13:30:00	Wellness Pharmacy	393	10	All the products are sold 24*7.
30	386	15	11011	16:00:00	18:00:00	Wellness Pharmacy	800	0	Medical Prescription is needed to avail this service.
30	200	15	1100000	16:00:00	18:00:00	Florence Wedding Planners	500	0	Specialises in Hand Made Wedding/Anniversary Invitation Cards.
5	390	7	0100111	12:30:00	14:00:00	Malhotra Diagnostic Labs	400	0	Malhotra Diagnostic Labs prides itself in being at the forefront of modern medical pathology practice. Every aspect of our investigation is performed under an umbrella of strict quality control using the most advanced accurate and reliable equipment. The laboratory is organised into departments that can be called upon to contribute their specialised skills and knowledge to any investigation.
24	386	21	1001001	19:00:00	20:30:00	Pushpendra Clinics	750	0	Offers Radiology and Pathology Services
\.


--
-- Name: Provides_RegionID_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('"Provides_RegionID_seq"', 1, false);


--
-- Name: Provides_ServiceID_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('"Provides_ServiceID_seq"', 1, false);


--
-- Name: Provides_ServiceProviderUserID_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('"Provides_ServiceProviderUserID_seq"', 1, false);


--
-- Data for Name: QandA; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY "QandA" ("CustomerUserID", "ServiceProviderUserID", "QuestionID") FROM stdin;
40	38	1
4	49	1
33	5	1
22	30	1
51	24	0
50	5	1
40	49	0
45	30	0
34	38	1
\.


--
-- Name: QandA_CustomerUserID_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('"QandA_CustomerUserID_seq"', 1, false);


--
-- Name: QandA_QuestionID_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('"QandA_QuestionID_seq"', 1, false);


--
-- Name: QandA_ServiceProviderID_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('"QandA_ServiceProviderID_seq"', 1, false);


--
-- Name: Question_QuestionID_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('"Question_QuestionID_seq"', 1, false);


--
-- Data for Name: Review; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY "Review" ("ReviewID", "ServiceID", "CustomerUserID", "Content", "Rating", "Timestamp", "ServiceProviderUserID") FROM stdin;
0	229	5	We gave a try to this service provider a few times before. The managers have a very good customer care. I highly recommend willing customers to try.	5	2013-01-08 02:00:00	44
2	145	57	I think I should write the service experience on this portal. The people here are very cooperative.	4	2013-06-01 08:00:00	8
3	219	41	We have tried this type of service a few times before. The staff put customers on high pedestal. I would never recommend willing customers to try.	4	2013-09-02 05:00:00	31
10	377	58	I want to mention the experience via ConcumerConnect. The staff have a very good customer care.	4	2013-02-07 19:00:00	12
12	125	27	These people are very irritating. I want to recommend people to go here.	2	2013-05-08 14:00:00	28
13	194	34	We gave a try to this service provider a few times before. The staff are very cooperative. I would never recommend this service provider.	1	2013-03-09 02:00:00	45
16	135	40	The managers are not as good as they publicise. I would stongly recommend willing people to give them a chance.	0	2013-07-03 03:00:00	36
19	243	45	I want to mention the service experience here. The staff are very cooperative.	4	2013-04-02 05:00:00	1
30	250	50	We have tried this type of service many times before. The people here are not as good as they publicise. I would never recommend this service provider.	2	2013-09-07 00:00:00	43
33	54	40	I want to mention the incident via ConcumerConnect. The workers have a very good customer care.	1	2013-08-03 16:00:00	7
35	61	6	We have tried this type of service a few times before. The workers are not as good as they publicise. I would never recommend willing people to give them a chance.	1	2013-02-07 21:00:00	50
38	245	26	I gave a try to this type of service a few times before. I should share the experience on this portal. The people here take pride in providing best service. I would stongly recommend willing customers to try.	5	2013-02-02 17:00:00	22
45	376	51	I gave a try to this service provider many times in the past. The managers take pride in providing best service. I would recommend willing customers to try.	2	2013-05-03 06:00:00	54
64	241	50	I am using this portal to express my opinion about the service experience on this portal. The people here put customers on high pedestal.	0	2013-01-09 03:00:00	26
65	13	51	We gave a try to this service provider never in the past. I am sharing the experience on this portal. The people here are very irritating. I highly recommend willing customers to try.	0	2013-02-01 10:00:00	0
66	234	51	The people here give the best possible service. I would stongly recommend this service provider.	2	2013-07-07 22:00:00	56
68	151	21	I want to mention the service review on this portal. These people are very irritating.	2	2013-09-02 07:00:00	37
74	85	5	We have tried this service provider many times before. I should share the service experience on this portal. The managers have a very good customer care. I would recommend willing people to give them a chance.	1	2013-08-08 06:00:00	9
85	208	50	I have experienced this type of service never before. I am writing the experience on this portal. The workers put customers on high pedestal. I would recommend willing customers to try.	1	2013-06-05 10:00:00	9
86	216	4	I am using this portal to express my opinion about the service experience on this portal. These people are not as good as they publicise.	5	2013-09-04 13:00:00	11
96	242	31	I have experienced this type of service a few times in the past. I should share the service review via ConcumerConnect. The managers put customers on high pedestal. I would never recommend willing customers to try.	2	2013-07-06 04:00:00	26
98	101	3	We have experienced this service provider never in the past. The workers are not as good as they publicise. I would recommend willing people to give them a chance.	4	2013-07-08 13:00:00	45
99	175	26	I should share the incident on this website. The people here are very irritating.	5	2013-06-09 08:00:00	18
102	386	26	These people take pride in providing best service. I would never recommend people to go here.	4	2013-08-04 21:00:00	0
104	153	9	The staff have a very good customer care. I want to recommend this service provider.	5	2013-05-02 16:00:00	36
106	124	49	The people here put customers on high pedestal. I would recommend willing people to give them a chance.	3	2013-02-08 10:00:00	12
109	108	51	The people here put customers on high pedestal. I would recommend people to go here.	4	2013-06-07 21:00:00	12
113	142	48	I am sharing the service review here. The people here give the best possible service.	2	2013-09-02 16:00:00	37
120	191	21	I have experienced this service provider many times in the past. I want to mention the incident on this portal. These people take pride in providing best service. I want to recommend people to go here.	1	2013-06-02 06:00:00	58
123	109	57	I have experienced this type of service many times in the past. I feel like sharing the service experience here. These people put customers on high pedestal. I would recommend this service.	0	2013-08-09 22:00:00	58
125	47	9	The managers have a very good customer care. I would stongly recommend this service.	5	2013-04-04 02:00:00	45
126	98	26	I should share the incident on this portal. The people here are not as good as they publicise.	3	2013-05-05 07:00:00	49
135	249	22	We have experienced this type of service many times before. The people here put customers on high pedestal. I highly recommend people to go here.	3	2013-01-09 14:00:00	3
138	45	3	We gave a try to this type of service never before. I should share the service review via ConcumerConnect. The people here have a very good customer care. I want to recommend willing customers to try.	0	2013-04-01 09:00:00	41
142	30	5	I have tried this type of service never in the past. I must mention the service experience on this portal. The managers take pride in providing best service. I would recommend people to go here.	2	2013-09-05 09:00:00	11
144	115	57	I have experienced this type of service many times in the past. The workers are very cooperative. I would stongly recommend willing customers to try.	1	2013-02-07 09:00:00	56
146	56	22	I think I should write the experience here. The workers have a very good customer care.	0	2013-09-02 05:00:00	18
147	80	57	I gave a try to this type of service many times before. I want to mention the service experience via ConcumerConnect. These people put customers on high pedestal. I would never recommend people to go here.	5	2013-04-02 09:00:00	18
148	375	53	I gave a try to this service provider never before. These people are very irritating. I would stongly recommend this service.	1	2013-02-06 12:00:00	13
150	74	53	I feel like sharing the experience on this website. The managers are very cooperative.	5	2013-01-03 09:00:00	15
152	76	33	I have experienced this type of service never in the past. These people take pride in providing best service. I would stongly recommend willing people to give them a chance.	4	2013-09-08 11:00:00	30
156	175	33	I must mention the experience on this portal. The staff have a very good customer care.	2	2013-05-06 01:00:00	14
162	118	53	I think I should write the service review on this portal. These people give the best possible service.	3	2013-01-02 11:00:00	55
165	98	46	We gave a try to this service provider never in the past. The workers are very cooperative. I want to recommend this service.	3	2013-02-06 10:00:00	47
177	215	38	I have experienced this type of service many times before. I am writing the experience here. The staff take pride in providing best service. I would never recommend this service provider.	0	2013-06-01 17:00:00	3
181	3	27	I have experienced this type of service many times in the past. I feel like sharing the incident on this portal. The workers put customers on high pedestal. I would never recommend willing customers to try.	1	2013-03-07 22:00:00	54
182	109	50	We have experienced this service provider a few times in the past. The workers are very cooperative. I would stongly recommend willing customers to try.	1	2013-06-09 07:00:00	21
185	90	11	I am writing the service experience on this website. These people are not as good as they publicise.	3	2013-05-05 15:00:00	27
188	181	26	These people are very cooperative. I would recommend this service provider.	1	2013-04-07 04:00:00	22
192	44	48	I gave a try to this service provider many times in the past. I am writing the service review via ConcumerConnect. The staff give the best possible service. I would stongly recommend this service.	1	2013-03-03 07:00:00	15
194	93	48	The people here take pride in providing best service. I highly recommend this service provider.	2	2013-07-02 06:00:00	9
195	69	24	These people are very irritating. I would stongly recommend willing people to give them a chance.	5	2013-06-03 06:00:00	22
198	38	40	The workers put customers on high pedestal. I would recommend people to go here.	3	2013-02-01 20:00:00	11
\.


--
-- Name: Review_CustomerUserID_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('"Review_CustomerUserID_seq"', 1, false);


--
-- Name: Review_ReviewID_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('"Review_ReviewID_seq"', 1, false);


--
-- Name: Review_ServiceID_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('"Review_ServiceID_seq"', 1, false);


--
-- Name: ServiceProvider_UserID_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('"ServiceProvider_UserID_seq"', 1, false);


--
-- Name: Service_ServiceID_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('"Service_ServiceID_seq"', 1, false);


--
-- Name: User_UserID_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('"User_UserID_seq"', 60, true);


--
-- Data for Name: Vote; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY "Vote" ("ReviewID", "CustomerUserID", "VotedByCustomerUserID", "TypeOfVote") FROM stdin;
98	3	29	1
3	41	54	-1
19	45	1	-1
126	26	48	-1
109	51	10	1
125	9	32	-1
64	50	42	1
65	51	41	-1
138	3	6	-1
156	33	30	1
177	38	56	1
2	57	42	-1
126	26	13	-1
16	40	24	-1
30	50	18	-1
156	33	6	-1
144	57	22	1
102	26	8	-1
74	5	43	1
38	26	14	1
10	58	2	1
96	31	7	-1
123	57	18	-1
68	21	42	1
165	46	31	-1
86	4	24	-1
99	26	24	-1
177	38	45	-1
126	26	21	-1
98	3	58	1
2	57	12	1
64	50	43	1
120	21	40	1
165	46	36	1
65	51	11	-1
104	9	6	1
38	26	58	-1
10	58	26	-1
144	57	52	1
120	21	18	-1
10	58	19	1
147	57	52	-1
0	5	52	1
126	26	20	-1
64	50	30	1
120	21	43	-1
120	21	42	-1
0	5	11	-1
150	53	23	1
147	57	55	-1
147	57	56	-1
0	5	0	-1
162	53	29	-1
68	21	7	1
74	5	5	1
12	27	34	1
156	33	40	1
64	50	39	-1
102	26	32	-1
104	9	40	1
2	57	36	1
104	9	53	-1
142	5	12	-1
104	9	4	-1
99	26	7	1
152	33	55	-1
152	33	9	1
138	3	8	-1
45	51	23	-1
162	53	12	-1
123	57	43	1
65	51	43	1
106	49	33	1
65	51	21	-1
65	51	44	-1
86	4	35	1
64	50	36	1
68	21	8	1
147	57	48	1
10	58	14	1
33	40	25	1
146	22	17	-1
147	57	38	-1
120	21	55	1
96	31	19	1
148	53	35	1
85	50	29	-1
19	45	54	-1
30	50	57	-1
144	57	30	-1
96	31	0	-1
66	51	41	-1
13	34	10	1
13	34	53	-1
2	57	26	1
165	46	56	-1
13	34	31	-1
99	26	32	1
30	50	11	-1
65	51	34	-1
146	22	30	-1
85	50	47	1
10	58	7	-1
146	22	52	-1
146	22	56	-1
66	51	56	-1
13	34	54	-1
125	9	9	-1
148	53	1	-1
165	46	7	-1
123	57	39	1
148	53	10	1
177	38	14	1
162	53	23	1
125	9	3	1
142	5	50	-1
30	50	51	-1
165	46	6	-1
74	5	25	-1
165	46	10	1
45	51	43	-1
16	40	58	-1
109	51	6	-1
113	48	40	1
135	22	23	-1
142	5	28	1
104	9	13	-1
66	51	12	-1
74	5	27	-1
104	9	57	-1
65	51	33	1
16	40	4	1
66	51	23	1
16	40	5	1
2	57	52	1
35	6	32	1
45	51	38	-1
65	51	51	-1
38	26	32	-1
68	21	24	-1
68	21	5	-1
12	27	30	1
152	33	12	1
33	40	13	1
33	40	3	1
99	26	26	1
33	40	24	1
0	5	20	-1
16	40	43	-1
162	53	45	-1
13	34	30	1
3	41	36	-1
138	3	53	1
19	45	45	-1
16	40	26	-1
16	40	48	-1
106	49	45	-1
123	57	54	1
74	5	3	1
98	3	45	-1
125	9	44	1
96	31	9	-1
148	53	57	1
86	4	53	-1
102	26	1	1
177	38	52	1
3	41	22	1
38	26	8	-1
13	34	39	-1
98	3	22	-1
120	21	56	-1
38	26	30	1
13	34	19	1
144	57	46	1
125	9	8	-1
19	45	25	1
102	26	10	-1
64	50	35	-1
19	45	10	-1
148	53	43	1
156	33	36	-1
99	26	2	-1
2	57	48	1
45	51	27	1
64	50	47	-1
65	51	52	1
19	45	19	1
135	22	33	-1
65	51	57	-1
123	57	55	-1
142	5	52	-1
86	4	2	1
148	53	2	1
142	5	42	1
138	3	49	-1
10	58	21	1
146	22	24	1
66	51	38	1
33	40	55	-1
85	50	42	1
125	9	21	-1
144	57	34	1
144	57	19	1
98	3	16	-1
98	3	15	-1
135	22	18	-1
10	58	55	-1
120	21	28	1
120	21	36	1
165	46	57	-1
65	51	39	1
113	48	48	-1
125	9	57	-1
30	50	55	1
65	51	37	-1
\.


--
-- Name: Vote_ReviewID_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('"Vote_ReviewID_seq"', 1, false);


--
-- Name: Vote_ServiceID_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('"Vote_ServiceID_seq"', 1, false);


--
-- Name: Vote_VotedByCustomerUserID_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('"Vote_VotedByCustomerUserID_seq"', 1, false);


--
-- Name: Wish_CustomerUserID_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('"Wish_CustomerUserID_seq"', 1, false);


--
-- Name: Wish_RegionID_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('"Wish_RegionID_seq"', 1, false);


--
-- Name: Wish_ServiceID_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('"Wish_ServiceID_seq"', 1, false);


--
-- Name: Wish_WishID_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('"Wish_WishID_seq"', 1, false);


--
-- PostgreSQL database dump complete
--

